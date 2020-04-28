<?php

namespace Limestone\SDK\Exception;

class CanCreateProjectForbiddenException extends \RuntimeException implements ClientException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('Cannot create projects', 403);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}