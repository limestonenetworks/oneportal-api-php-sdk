<?php

namespace Limestone\SDK\Exception;

class AssociateProjectServerForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden request', 403);
    }
}