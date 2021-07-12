<?php

namespace Limestone\Command;

class GetSSHKeyListCommand extends AbstractGetCommand
{
    use \Limestone\InteractsWithApi;

    protected static $defaultName = 'sshkey:list';

    protected ?string $command_description = 'Get SSH key list';

    protected array $supported_output = ['table', 'json'];

    protected function getResult(\Limestone\SDK\Client $client)
    {
        return $client->getSSHKeyList()->getKeys();
    }

    protected function getTableHeader(): ?array
    {
        return ['ID', 'Name', 'Fingerprint', 'Comment'];
    }

    protected function getTableRows($data): ?array
    {
        $output_data = [];
        foreach ($data as $key) {
            $output_data[] = [$key->getId(), $key->getName(),
                $key->getFingerprint(), $key->getComment()];
        }
        return $output_data;
    }
}
