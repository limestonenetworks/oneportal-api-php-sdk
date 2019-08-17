<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetJobStatusCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'job:get';

    protected function configure()
    {
        $this
            ->setDescription('Get a job status.')
            ->addArgument('job_id',InputArgument::REQUIRED,'The job id')
            ->addOption('show_all','a',InputOption::VALUE_NONE, "Show all status updates")
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to get a job status...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $show_all = $input->getOption("show_all");
        $params = [];
        if($show_all == 'true' || $show_all === true){
            $params['show_all'] = true;
        }
        $result = $client->getJobStatus($input->getArgument('job_id'),$params);
        $output->write(json_encode($this->toArray($result)),true);
    }
}
