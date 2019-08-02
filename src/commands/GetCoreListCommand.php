<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetCoreListCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'core:list';

    protected function configure()
    {
        $this
            ->setDescription('Get the list of cores.')
            ->setHelp('This command allows you to get a list of cores...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getCoreList();
        $output->write(json_encode($this->toArray($result)), true);
    }
}
