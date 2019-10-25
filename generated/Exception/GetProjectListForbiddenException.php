<?php

namespace Limestone\SDK\Exception;

class GetProjectListForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden request', 403);
    }
}