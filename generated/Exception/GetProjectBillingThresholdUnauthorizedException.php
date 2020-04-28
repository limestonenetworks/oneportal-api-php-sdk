<?php

namespace Limestone\SDK\Exception;

class GetProjectBillingThresholdUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthorized request', 401);
    }
}