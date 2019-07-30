<?php

namespace Limestone\SDK\Exception;

class GetJobStatusUnauthorizedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Unauthenticated', 401);
    }
}