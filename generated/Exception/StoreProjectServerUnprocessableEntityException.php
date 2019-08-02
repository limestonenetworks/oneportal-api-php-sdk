<?php

namespace Limestone\SDK\Exception;

class StoreProjectServerUnprocessableEntityException extends \RuntimeException implements ClientException
{
    public function __construct($body)
    {
        parent::__construct('Invalid parameters: '. $body, 422);
    }
}