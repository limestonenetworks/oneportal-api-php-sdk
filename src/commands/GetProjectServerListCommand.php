<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetProjectServerListCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:list';

    protected function configure()
    {
        $this
            ->setDescription('Get the list of a project\'s server.')
            ->addOption('project','',InputOption::VALUE_REQUIRED,'The project id')
            ->setHelp('This command allows you to get a list of project\'s servers...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getProjectServers($input->getOption('project'));
        $output->write(json_encode($result), true);
    }
}
