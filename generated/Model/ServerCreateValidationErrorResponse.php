<?php

namespace Limestone\SDK\Model;

class ServerCreateValidationErrorResponse
{
    /**
     * 
     *
     * @var ServerCreateValidationError[]
     */
    protected $errors;
    /**
     * 
     *
     * @return ServerCreateValidationError[]|null
     */
    public function getErrors() : ?array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param ServerCreateValidationError[]|null $errors
     *
     * @return self
     */
    public function setErrors(?array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}