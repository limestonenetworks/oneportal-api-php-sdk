<?php

namespace Limestone\SDK\Exception;

class StoreInstanceUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request', 401);
    }
}