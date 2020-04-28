<?php

namespace Limestone\SDK\Exception;

class DeleteInstanceNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Instance not found', 404);
    }
}