<?php

namespace Limestone\SDK\Exception;

class DeleteProjectBadRequestException extends \RuntimeException implements ClientException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('Problem on delete', 400);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}