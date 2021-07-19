<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetFacilityStockCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'facility:stock';

    protected ?string $command_description = 'Get available stock at a facility';

    protected array $supported_output = ['table', 'json'];

    protected function configure()
    {
        parent::configure();

        $this->addArgument('facility', InputArgument::REQUIRED, 'Facility name');
    }

    protected function getResult(InputInterface $input, Client $client)
    {
        return $this->serializeModel(
            $client->getFacilityStock($input->getArgument('facility'))
        );
    }

    protected function getTableHeader(): ?array
    {
        return ['Facility', 'Core', 'Availability'];
    }

    protected function getTableRows($data): ?array
    {
        $output_data = [];
        $statuses = array_diff(array_keys($data), ['facility']);
        foreach ($data as $key => $value) {
            if (!in_array($key, $statuses)) {
                continue;
            }

            foreach ($value as $core) {
                $output_data[] = [
                    $data['facility'],
                    $core,
                    ucfirst($key),
                ];
            }
        }
        return $output_data;
    }
}
