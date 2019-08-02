<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteSSHKeyCommand extends Command
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'sshkey:delete';

    protected function configure()
    {
        $this
            ->setDescription('Delete an ssh key.')
            ->addArgument('name',InputArgument::REQUIRED,'The ssh key name')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to get an ssh key...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $result = $client->deleteSSHKey($input->getArgument('name'));
        $output->write("Success",true);
    }
}