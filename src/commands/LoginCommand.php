<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Psy\Configuration;
use Psy\Shell;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LoginCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'login';

    protected function configure()
    {
        $this
            ->addArgument('profile', InputArgument::OPTIONAL, 'Profile to login as', 'default')
            ->setDescription('Login to the api with a given profile (or the default)');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }
}