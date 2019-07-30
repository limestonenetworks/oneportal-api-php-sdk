<?php

namespace Limestone\SDK\Exception;

class AssociateProjectServerBadRequestException extends \RuntimeException implements ClientException
{
    private $result;
    public function __construct(\Limestone\SDK\Model\Result $result)
    {
        parent::__construct('Bad request / Server not eligible to be assigned to a project', 400);
        $this->result = $result;
    }
    public function getResult()
    {
        return $this->result;
    }
}