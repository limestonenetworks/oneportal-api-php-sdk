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
        $this->addOption('profile', null,
                         InputOption::VALUE_REQUIRED,
                         'Profile to use for api access');
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $profileEnv = getenv('LSN_API_PROFILE');
        $profileOption = $input->getOption('profile');
        // Use --profile option if defined, then use LSN_API_PROFILE
        // environment if it exists, otherwise just use 'DEFAULT'
        $profile = !is_null($profileOption) ? $profileOption :
                   ($profileEnv !== false ? $profileEnv : 'DEFAULT');

        $this->client = $this->getApiClient($profile);
        if ($input->hasOption('project') &&
                is_null($input->getOption('project'))) {
            $input->setOption('project', $this->getProject());
        }
    }

    protected function getClient(): Client
    {
        return $this->client;
    }
}
