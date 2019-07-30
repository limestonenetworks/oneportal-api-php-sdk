<?php

namespace Limestone\SDK\Exception;

class GetFacilityNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Facility not found', 404);
    }
}