<?php

namespace Limestone\SDK\Exception;

class AllocateIPAddressBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}