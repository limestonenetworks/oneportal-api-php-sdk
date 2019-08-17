<?php

namespace Limestone\Command;

use Limestone\SDK\Model\ServerCreateParametersWithOSDisk;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateServerCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:create';

    protected function configure()
    {
        $this
            ->setDescription('Creates a new server.')
            ->addArgument('project_id', InputArgument::REQUIRED, 'Project ID')
            ->addArgument('name', InputArgument::REQUIRED, 'Server Name')
            ->addOption('core', 'c', InputOption::VALUE_REQUIRED, 'Core Name')
            ->addOption('facility', 'f', InputOption::VALUE_REQUIRED, 'Facility Name')
            ->addOption('image', 'i', InputOption::VALUE_REQUIRED, 'Image Name')
            ->addOption('os-disk', 'd', InputOption::VALUE_REQUIRED, 'OS Disk Device', '/dev/sda')
            ->addOption('quantity', null, InputOption::VALUE_REQUIRED, 'Quantity of servers to create', 1)
            ->addOption('description', null, InputOption::VALUE_REQUIRED, 'Description for the server')
            ->addOption('password', 'p', InputOption::VALUE_REQUIRED, 'SSH/RDP Administrator Password')
            ->addOption('key',
                'k',
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'SSH Keys to add to the server')
            ->addOption('network',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Networks to attach the server to',
                ['public', 'private'])
            ->addOption('network', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'Networks to attach the server to', ['public', 'private'])
            ->addOption('user-data', null, InputOption::VALUE_REQUIRED, 'User Data to provide to the server')
            ->addOption('user-data-file', null, InputOption::VALUE_REQUIRED, 'User Data file to provide to the server')
            ->addOption('tag',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Tags to set on the server')
            ->addOption('meta',
                null,
                InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY,
                'Metadata to set on the server')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Create a new bare-metal server in a project');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $body = new ServerCreateParametersWithOSDisk();
        $body->setName($input->getArgument('name'));
        $body->setCore($input->getOption('core'));
        $body->setFacility($input->getOption('facility'));
        $body->setImage($input->getOption('image'));
        $body->setOsDisk($input->getOption('os-disk'));
        $body->setQuantity($input->getOption('quantity'));
        $body->setDescription($input->getOption('description'));
        $body->setAdminPassword($input->getOption('password'));
        $body->setSshKeys($input->getOption('key'));
        $body->setNetworks($input->getOption('network'));
        $body->setUserData($this->getUserData($input));
        $body->setTags($input->getOption('tag'));
        $meta = new \ArrayObject;
        foreach($input->getOption('meta') as $m) {
            $_meta = explode('=', $m);
            if (sizeOf($_meta) < 2) {
                $err = $output->getErrorOutput();
                $err->writeln("<error>Could not parse metadata option: {$m}. Metadata must be specified like: key=value</error>");
                exit();
            }

            $key = array_shift($_meta);
            $value = implode('=', $_meta);
            $meta[$key] = $value;
        }
        $body->setCustomMetadata($meta);

        try{
            $result = $client->storeProjectServer($input->getArgument('project_id'),$body);
            $output->write($this->toJson($result),true);
        } catch (\Exception $e){
            $output->write($e->getMessage(),true);
        }
    }

    protected function getUserData(InputInterface $input)
    {
        $option = $input->hasExclusiveOption('user-data', 'user-data-file');
        switch ($option)
        {
            case 'user-data':
                return $input->getOption('user-data');
            break;
            case 'user-data-file':
                $userdata = @file_get_contents($input->getOption('user-data-file'));
                if ($userdata === FALSE)
                {
                    throw new \Exception('Could not read user data file');
                }
                return $userdata;
            break;
        }
    }
}
