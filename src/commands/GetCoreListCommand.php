<?php

namespace Limestone\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetCoreListCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'core:list';

    protected $supported_output = ['table', 'json'];
    protected $rate_map = ['hourly' => 'hr', 'monthly' => 'mo'];

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Get the list of cores.')
            ->setHelp('This command allows you to get a list of cores...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getCoreList();

        switch ($input->getOption('format')) {
        case 'json':
            return $this->outputJsonArray($output, $this->toArray($result));
        break;
        default:
            return $this->outputGenericTable(
                $output,
                ['ID', 'CPU', 'Rate', 'Cores', 'Memory', 'Disk', 'Network'],
                $this->buildTableRows($result)
            );
        break;
        }
    }

    protected function buildTableRows(array $cores) {
        $rows = [];
        foreach ($cores as $core) {
            $metadata = array_column(
                $this->toArray($core->getMetadata()), 'value', 'key'
            );
            if ($metadata['cpus'] > 1) {
                $cpu = $metadata['cpus'].' x '.$metadata['cpu_model'];
            }

            $rows[] = [
                $core->getId(),
                $cpu ?? $metadata['cpu_model'],
                $core->getRate().'/'.$this->rate_map[$core->getInterval()],
                ($metadata['cpus'] * $metadata['cpu_cores']) ?? 0,
                $metadata['memory'],
                $metadata['disk_count'].' x '.$metadata['disk_size'].' '.$metadata['disk_type'],
                $metadata['nic_count'].' x '.$metadata['nic_speed'],
            ];
        }
        return $rows;
    }
}
