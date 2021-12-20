<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GetProjectCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'project:get';
    protected ?string $command_description = 'Get information about a project';

    protected array $supported_output = ['table', 'json'];
    protected bool $horizontal_table = true;

    protected function configure()
    {
        parent::configure();

        $this->addArgument('project', InputArgument::REQUIRED, 'Project ID');
    }

    protected function getResult(InputInterface $input, Client $client)
    {
        return $client->getProject($input->getArgument('project'));
    }

    protected function getTableHeader(): ?array
    {
        return ['UUID', 'Project ID', 'Name'];
    }

    protected function getTableRows($data): ?array
    {
        $return = [
            $data->getUuid(),
            $data->getProjectId(),
            $data->getName(),
        ];

        return [$return];
    }
}
