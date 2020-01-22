<?php

namespace Limestone\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetCoreCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'core:get';

    protected function configure()
    {
        $this
            ->setDescription('Get a core')
            ->addOption('core','c',InputOption::VALUE_REQUIRED,'The core name')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to get a core');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getCore($input->getOption('core'));
        $output->write($this->toJson($result),true);
    }
}
