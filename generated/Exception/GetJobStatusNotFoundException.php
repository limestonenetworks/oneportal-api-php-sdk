<?php

namespace Limestone\SDK\Exception;

class GetJobStatusNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Job not found', 404);
    }
}