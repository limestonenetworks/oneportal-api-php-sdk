<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetFacilityStockCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'facility:stock';

    protected function configure()
    {
        $this
            ->setDescription('Get the stock for a facility.')
            ->addArgument('facility',InputArgument::REQUIRED,'The facility name')
            ->setHelp('This command allows you to get the stock for a facility by name...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getFacilityStock($input->getArgument('facility'));
        $output->write($this->toJson($result),true);
    }
}
