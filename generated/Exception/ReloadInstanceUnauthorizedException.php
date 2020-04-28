<?php

namespace Limestone\SDK\Exception;

class ReloadInstanceUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request', 401);
    }
}