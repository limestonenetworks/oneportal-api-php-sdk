<?php

namespace Limestone\SDK\Exception;

class DeleteSSHKeyInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('There was an error deleting the ssh key', 500);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}