<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;

class GetCoreCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'core:get';
    protected ?string $command_description = 'Get information about a core';

    protected array $supported_output = ['table', 'json'];
    protected bool $horizontal_table = true;

    protected function configure()
    {
        parent::configure();

        $this->addArgument('core', InputArgument::REQUIRED, 'Core Name');
    }

    protected function getResult(InputInterface $input, Client $client)
    {
        return $client->getCore($input->getArgument('core'));
    }

    protected function getTableHeader(): ?array
    {
        return ['ID', 'CPU', 'Rate', 'Cores', 'Memory', 'Disk', 'Network'];
    }

    protected function getTableRows($core): ?array
    {
        $metadata = array_column(
            $this->toArray($core->getMetadata()), 'value', 'key'
        );
        if ($metadata['cpus'] > 1) {
            $cpu = $metadata['cpus'].' x '.$metadata['cpu_model'];
        }
        $return = [
            $core->getId(),
            $cpu ?? $metadata['cpu_model'],
            $core->getRate().'/'.$this->rate_map[$core->getInterval()],
            ($metadata['cpus'] * $metadata['cpu_cores']) ?? 0,
            $metadata['memory'],
            $metadata['disk_count'].' x '.$metadata['disk_size'].' '.$metadata['disk_type'],
            $metadata['nic_count'].' x '.$metadata['nic_speed'],
        ];
        return [$return];
    }
}
