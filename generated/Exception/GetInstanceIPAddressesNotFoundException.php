<?php

namespace Limestone\SDK\Exception;

class GetInstanceIPAddressesNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Instance ips not found', 404);
    }
}