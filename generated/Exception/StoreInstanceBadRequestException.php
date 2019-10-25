<?php

namespace Limestone\SDK\Exception;

class StoreInstanceBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}