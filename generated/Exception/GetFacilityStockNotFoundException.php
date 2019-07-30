<?php

namespace Limestone\SDK\Exception;

class GetFacilityStockNotFoundException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Facility not found', 404);
    }
}