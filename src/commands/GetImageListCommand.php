<?php

namespace Limestone\Command;

class GetImageListCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'image:list';

    protected ?string $command_description = 'Get OS image list';

    protected array $supported_output = ['table', 'json'];

    protected function getResult(\Limestone\SDK\Client $client)
    {
        return $client->getImageList();
    }

    protected function getTableHeader(): ?array
    {
        return ['ID', 'Name'];
    }

    protected function getTableRows($data): ?array
    {
        $output_data = [];
        foreach ($data as $image) {
            $output_data[] = [$image->getName(), $image->getDisplayName()];
        }
        return $output_data;
    }
}
