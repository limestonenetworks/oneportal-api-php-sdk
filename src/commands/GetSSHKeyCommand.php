<?php

namespace Limestone\Command;

use Limestone\SDK\Client;
use Limestone\SDK\Model\V2ProjectPostBody;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetSSHKeyCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'sshkey:get';
    protected ?string $command_description = 'Get an SSH key';

    protected array $supported_output = ['table', 'json'];
    protected bool $horizontal_table = true;

    protected function configure()
    {
        parent::configure();

        $this->addArgument('name', InputArgument::REQUIRED, 'SSH Key Name');
    }

    protected function getResult(InputInterface $input, Client $client)
    {
        return $client->getSSHKey($input->getArgument('name'));
    }

    protected function getTableHeader(): ?array
    {
        return ['ID', 'Name', 'Fingerprint', 'Comment'];
    }

    protected function getTableRows($data): ?array
    {
        $return = [
            $data->getId(),
            $data->getName(),
            $data->getFingerprint(),
            $data->getComment(),
        ];
        return [$return];
    }
}
