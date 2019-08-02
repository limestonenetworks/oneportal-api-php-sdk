<?php

namespace Limestone\SDK\Exception;

class StoreSSHKeyUnprocessableEntityException extends \RuntimeException implements ClientException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('Invalid parameters', 422);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}