<?php

namespace Limestone\SDK\Exception;

class AddIPAddressBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}