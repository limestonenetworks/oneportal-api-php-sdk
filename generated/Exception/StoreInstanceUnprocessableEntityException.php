<?php

namespace Limestone\SDK\Exception;

class StoreInstanceUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $serverCreateValidationErrorResponse;
    public function __construct(\Limestone\SDK\Model\ServerCreateValidationErrorResponse $serverCreateValidationErrorResponse)
    {
        parent::__construct('Invalid parameters', 422);
        $this->serverCreateValidationErrorResponse = $serverCreateValidationErrorResponse;
    }
    public function getServerCreateValidationErrorResponse()
    {
        return $this->serverCreateValidationErrorResponse;
    }
}