<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetSSHKeyCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'sshkey:get';

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Get an ssh key')
            ->addArgument('name',InputArgument::REQUIRED,'The ssh key name')
            ->setHelp('This command allows you to get an ssh key...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getSSHKey($input->getArgument("name"));
        $output->write($this->toJson($result), true);
        return parent::SUCCESS;
    }
}
