<?php

namespace Limestone;

use Symfony\Component\Console\Application as Symfony_Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class Application extends Symfony_Application
{
    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
        if (is_null($input)) $input = new ArgvInput;
        parent::run($input, $output);
    }
}
