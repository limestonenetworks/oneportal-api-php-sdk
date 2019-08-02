<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetFacilityListCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'facility:list';

    protected function configure()
    {
        $this
            ->setDescription('Get the stock for a facility.')
            ->setHelp('This command allows you to get a list of facilities...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getFacilityList();
        foreach ($result as $item) {
            $output->write($this->serializeModel($item),true);
        }
    }
}