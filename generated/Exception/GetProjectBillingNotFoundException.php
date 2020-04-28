<?php

namespace Limestone\SDK\Exception;

class GetProjectBillingNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Project not found', 404);
    }
}