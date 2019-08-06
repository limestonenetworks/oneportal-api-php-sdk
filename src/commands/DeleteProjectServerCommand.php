<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteProjectServerCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:delete';

    protected function configure()
    {
        $this
            ->setDescription('Delete an server')
            ->addArgument('project_id', InputArgument::REQUIRED, 'Project ID')
            ->addArgument('server_id', InputArgument::REQUIRED, 'Server ID')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Delete a bare-metal server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->deleteProjectServer(
            $input->getArgument('project_id'),
            $input->getArgument('server_id')
        );
        $output->writeln("Success");
    }
}
