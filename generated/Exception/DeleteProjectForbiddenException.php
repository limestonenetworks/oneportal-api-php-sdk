<?php

namespace Limestone\SDK\Exception;

class DeleteProjectForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden request', 403);
    }
}