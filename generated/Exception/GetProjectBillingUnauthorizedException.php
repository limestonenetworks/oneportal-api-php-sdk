<?php

namespace Limestone\SDK\Exception;

class GetProjectBillingUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request', 401);
    }
}