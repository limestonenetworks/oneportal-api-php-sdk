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
        parent::configure();

        $this
            ->setDescription('Get a job status.')
            ->addArgument('job_id',InputArgument::REQUIRED,'The job id')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to get a job status...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getJob($input->getArgument('job_id'));
        $output->write($this->toJson($result),true);
        return parent::SUCCESS;
    }
}
