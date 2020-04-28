<?php

namespace Limestone\SDK\Exception;

class GetJobHistoryNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Jobs not found', 404);
    }
}