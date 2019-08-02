<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetProjectListCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'project:list';

    protected function configure()
    {
        $this
            ->setDescription('Get the list of projects.')
            ->setHelp('This command allows you to get a list of projects...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getProjectList();
        foreach ($result as $item) {
            $output->write($this->serializeModel($item),true);
        }
    }
}