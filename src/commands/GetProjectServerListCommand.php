<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

class GetProjectServerListCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'server:list';

    protected ?string $command_description = 'Get a list of project\'s servers';

    protected array $supported_output = ['table', 'json'];

    protected function configure()
    {
        parent::configure();

        $this->addOption(
            'project', '', InputOption::VALUE_REQUIRED, 'The project id'
        );
    }

    protected function getResult(InputInterface $input, Client $client)
    {
        return $client->getProjectServers($input->getOption('project'));
    }

    protected function getTableHeader(): ?array
    {
        return [
            'ID', 'Facility', 'Core', 'Name', 'Server ID', 'Project', 'Status',
            'Rate', 'Creation Date', 'Management IP',
        ];
    }

    protected function getTableRows($data): ?array
    {
        $return = [];
        foreach ($data as $server) {
            array_push(
                $return,
                [
                    $server->getShortUuid(),
                    $server->getFacility()->getFacilityName(),
                    $server->getCore()->getId(),
                    $server->getName(),
                    $server->getServerId(),
                    $server->getProjectId(),
                    $server->getStatus(),
                    $server->getCore()->getRate()
                        .'/'.$this->rate_map[$server->getCore()->getInterval()],
                    $server->getProvisionDate(),
                    $server->getManagementIp(),
                ]
            );
        }
        return $return;
    }
}
