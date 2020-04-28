<?php

namespace Limestone\SDK\Exception;

class DeallocateIPSubnetForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request', 403);
    }
}