<?php

namespace Limestone\Command;

use Limestone\SDK\Model\V2ProjectPostBody;
use Limestone\SDK\Model\V2SshkeyPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateSSHKeyCommand extends AbstractCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'sshkey:create';

    protected function configure()
    {
        $this
            ->setDescription('Creates a new ssh pubkey.')
            ->addArgument('name',InputArgument::REQUIRED,'The name of the pubkey')
            ->addArgument('pubkey',InputArgument::REQUIRED,'The pubkey')
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a project...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = $this->getClient();
        $body = new V2SshkeyPostBody();
        $body->setName($input->getArgument('name'));
        $body->setPubkey($input->getArgument('pubkey'));
        $result = $client->storeSSHKey($body);
        $output->write($this->toJson($result),true);
    }
}