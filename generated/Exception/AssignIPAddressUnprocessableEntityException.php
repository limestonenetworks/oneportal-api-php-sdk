<?php

namespace Limestone\SDK\Exception;

class AssignIPAddressUnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Invalid parameters', 422);
    }
}