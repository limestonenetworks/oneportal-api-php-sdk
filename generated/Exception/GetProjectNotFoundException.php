<?php

namespace Limestone\SDK\Exception;

class GetProjectNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Project not found', 404);
    }
}