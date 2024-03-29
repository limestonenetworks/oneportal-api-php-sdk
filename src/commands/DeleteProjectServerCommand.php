<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteProjectServerCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:delete';

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Delete an server')
            ->addOption('project', '',InputOption::VALUE_REQUIRED, 'Project ID')
            ->addArgument('server_id', InputArgument::REQUIRED, 'Server ID')
            ->addOption('wait', 'w', InputOption::VALUE_NONE, 'Wait for result')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Delete a bare-metal server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->deleteProjectServer(
            $input->getOption('project'),
            $input->getArgument('server_id'),
            ['wait' => $input->getOption('wait')]
        );
        $output->writeln($this->toJson($result),true);
        return parent::SUCCESS;
    }
}
