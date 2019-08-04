<?php

namespace Limestone\SDK\Model;

class ServerCreateValidationError
{
    /**
     * Property that failed validation
     *
     * @var string
     */
    protected $property;
    /**
     * 
     *
     * @var string
     */
    protected $pointer;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $constraint;
    /**
     * 
     *
     * @var int
     */
    protected $context;
    /**
     * Property that failed validation
     *
     * @return string|null
     */
    public function getProperty() : ?string
    {
        return $this->property;
    }
    /**
     * Property that failed validation
     *
     * @param string|null $property
     *
     * @return self
     */
    public function setProperty(?string $property) : self
    {
        $this->property = $property;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPointer() : ?string
    {
        return $this->pointer;
    }
    /**
     * 
     *
     * @param string|null $pointer
     *
     * @return self
     */
    public function setPointer(?string $pointer) : self
    {
        $this->pointer = $pointer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConstraint() : ?string
    {
        return $this->constraint;
    }
    /**
     * 
     *
     * @param string|null $constraint
     *
     * @return self
     */
    public function setConstraint(?string $constraint) : self
    {
        $this->constraint = $constraint;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getContext() : ?int
    {
        return $this->context;
    }
    /**
     * 
     *
     * @param int|null $context
     *
     * @return self
     */
    public function setContext(?int $context) : self
    {
        $this->context = $context;
        return $this;
    }
}