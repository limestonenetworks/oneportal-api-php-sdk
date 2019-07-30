<?php

namespace Limestone\SDK\Exception;

class GetCoreNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Core not found', 404);
    }
}