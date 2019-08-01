<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteProjectCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'project:delete';

    protected function configure()
    {
        $this
            ->setDescription('Delete a project.')
            ->addArgument('project_id',InputArgument::REQUIRED,'The project id')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to get a project...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->deleteProject($input->getArgument('project_id'));
        $output->write("Success",true);
    }
}