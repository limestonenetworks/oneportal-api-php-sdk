<?php

namespace Limestone\SDK\Exception;

class GetImageNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Image not found', 404);
    }
}