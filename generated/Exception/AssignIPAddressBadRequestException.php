<?php

namespace Limestone\SDK\Exception;

class AssignIPAddressBadRequestException extends \RuntimeException implements ClientException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('Bad request', 400);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}