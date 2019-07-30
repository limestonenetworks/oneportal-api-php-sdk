<?php

namespace Limestone\SDK\Exception;

class DeleteProjectInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('Error on delete', 500);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}