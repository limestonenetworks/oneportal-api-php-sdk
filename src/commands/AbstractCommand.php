<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Limestone\SDK\Model\V2ProjectPostBody;
use Psy\Configuration;
use Psy\Shell;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCommand extends Command
{
    use \Limestone\InteractsWithApi;
    public $client;

    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->addOption('profile','',InputOption::VALUE_OPTIONAL,'Profile to use for api access','default');
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->client = $this->getApiClient($input->getOption('profile'));
    }

    protected function getClient(): Client
    {
        return $this->client;
    }
}