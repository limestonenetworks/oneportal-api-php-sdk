<?php

namespace Limestone\SDK\Exception;

class DeleteProjectServerNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Project/Server not found', 404);
    }
}