<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetImageListCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'image:list';

    protected function configure()
    {
        parent::configure();

        $this
            ->setDescription('Get the image list.')
            ->setHelp('This command allows you to get a list of images...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getImageList();
        $output->write(json_encode($this->toArray($result)), true);
        return parent::SUCCESS;
    }
}
