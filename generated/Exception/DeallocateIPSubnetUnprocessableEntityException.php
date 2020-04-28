<?php

namespace Limestone\SDK\Exception;

class DeallocateIPSubnetUnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Invalid parameters', 422);
    }
}