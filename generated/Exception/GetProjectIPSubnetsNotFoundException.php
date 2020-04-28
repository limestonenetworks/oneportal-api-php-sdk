<?php

namespace Limestone\SDK\Exception;

class GetProjectIPSubnetsNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Project ips not found', 404);
    }
}