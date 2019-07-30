<?php

namespace Limestone\SDK\Model;

class Result
{
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var bool
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getStatus() : bool
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param bool $status
     *
     * @return self
     */
    public function setStatus(bool $status) : self
    {
        $this->status = $status;
        return $this;
    }
}