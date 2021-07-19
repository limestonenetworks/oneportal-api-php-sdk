<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Symfony\Component\Console\Input\InputInterface;

class GetProjectListCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'project:list';

    protected ?string $command_description = 'Get the list of projects';

    protected array $supported_output = ['table', 'json'];

    protected function getResult(InputInterface $input, Client $client)
    {
        return $client->getProjectList();
    }

    protected function getTableHeader(): ?array
    {
        return ['UUID', 'Project ID', 'Name'];
    }

    protected function getTableRows($data): ?array
    {
        $output_data = [];
        foreach ($data as $project) {
            $output_data[] = [
                $project->getUuid(), $project->getProjectId(),
                $project->getName()];
        }
        return $output_data;
    }
}
