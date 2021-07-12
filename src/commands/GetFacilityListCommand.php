<?php

namespace Limestone\Command;

class GetFacilityListCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'facility:list';

    protected ?string $command_description = 'List available datacenter facilities';

    protected array $supported_output = ['table', 'json'];

    protected function getResult(\Limestone\SDK\Client $client)
    {
        return $client->getFacilityList();
    }

    protected function getTableHeader(): ?array
    {
        return ['Code', 'Name', 'Description'];
    }

    protected function getTableRows($data): ?array
    {
        $output_data = [];
        foreach ($data as $facility) {
            $output_data[] = [$facility->getFacilityName(),
                $facility->getFacilityTitle(), $facility->getFacilityDescription()];
        }
        return $output_data;
    }
}
