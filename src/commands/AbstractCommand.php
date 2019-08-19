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
        $profile = getenv('LSN_API_PROFILE');
        $profileOption = $input->getOption('profile');
        $profile = $profile === false ? $profileOption : ($profileOption == 'default' ? $profile : $profileOption);
        $this->client = $this->getApiClient($profile);
        if($input->hasOption('project')){
            $api_project = getenv('LSN_API_PROJECT');
            $project = $this->getProject($profile);
            $project_id = $input->getOption('project');
            if($api_project !== false && null === $project_id){
                $input->setOption('project',$api_project);
            }
            else if(is_string($project) && null === $project_id){
                $input->setOption('project',$project);
            }
        }
    }

    protected function getClient(): Client
    {
        return $this->client;
    }
}