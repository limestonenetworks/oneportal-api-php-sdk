<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetSSHKeyListCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'sshkey:list';

    protected function configure()
    {
        $this
            ->setDescription('Get the list of ssh keys')
            ->setHelp('This command allows you to get a list of ssh keys...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->getSSHKeyList();
        $output->write(json_encode($this->toArray($result->getKeys())), true);
    }
}
