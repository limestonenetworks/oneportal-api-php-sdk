<?php

namespace Limestone\SDK\Exception;

class StoreInstanceForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Forbidden request', 403);
    }
}