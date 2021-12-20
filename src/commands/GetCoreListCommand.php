<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetCoreListCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'core:list';

    protected array $supported_output = ['table', 'json'];

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Get the list of cores.')
            ->setHelp('This command allows you to get a list of cores...');
    }

    protected function getResult(InputInterface $input, Client $client)
    {
        return $client->getCoreList();
    }

    protected function getTableHeader(): ?array
    {
        return ['ID', 'CPU', 'Rate', 'Cores', 'Memory', 'Disk', 'Network'];
    }

    protected function getTableRows($cores): ?array
    {
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
