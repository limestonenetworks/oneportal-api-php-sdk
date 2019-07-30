<?php

namespace Limestone\SDK\Exception;

class StoreProjectServerBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Bad request', 400);
    }
}