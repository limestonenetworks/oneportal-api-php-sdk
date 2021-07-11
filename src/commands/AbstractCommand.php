<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

abstract class AbstractCommand extends Command
{
    use \Limestone\InteractsWithApi;
    public $client;

    protected $supported_output = ['json'];

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $profileEnv = getenv('LSN_API_PROFILE');
        $profileOption = $input->getOption('profile');
        // Use --profile option if defined, then use LSN_API_PROFILE
        // environment if it exists, otherwise just use 'DEFAULT'
        $profile = !is_null($profileOption) ? $profileOption :
                   ($profileEnv !== false ? $profileEnv : 'DEFAULT');

        $this->client = $this->getApiClient($profile);
        if ($input->hasOption('project')
            && is_null($input->getOption('project'))
        ) {
            $input->setOption('project', $this->getProject());
        }
    }

    protected function configure() {
        parent::configure();

        $this->addOption(
            'profile', null,
            InputOption::VALUE_REQUIRED,
            'Profile to use for api access'
        );
        $this->addOption(
            'format', 'f', InputOption::VALUE_REQUIRED,
            'Output format ('.join(', ', $this->supported_output).')',
            $this->supported_output[0]
        );
    }

    protected function getClient(): Client
    {
        return $this->client;
    }

    protected function outputJsonArray(OutputInterface $output, array $data): int
    {
        $output->writeLn(json_encode($data));
        return parent::SUCCESS;
    }

    protected function outputJson(OutputInterface $output, \stdClass $data): int
    {
        $output->writeLn(json_encode($data));
        return parent::SUCCESS;
    }

    protected function outputGenericTable(
        OutputInterface $output,
        ?array $headers = [],
        ?array $rows = []
    ): int {
        $table = new Table($output);
        if ($headers) $table->setHeaders($headers);
        if ($rows) $table->setRows($rows);
        $table->render();

        return parent::SUCCESS;
    }
}
