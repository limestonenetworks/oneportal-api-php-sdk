<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetServerListCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:list';

    protected function configure()
    {
        $this
            ->setDescription('Get the list of servers for a project')
            ->addArgument('project_id',InputArgument::REQUIRED,'The project id')
            ->setHelp('This command allows you to get a list of servers...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getProjectServers($input->getArgument('project_id'));
        $output->write(json_encode($this->toArray($result)), true);
    }
}
