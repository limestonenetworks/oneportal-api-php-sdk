<?php

namespace Limestone\SDK\Exception;

class CanCreateProjectUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request', 401);
    }
}