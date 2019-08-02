<?php

namespace Limestone\SDK\Model;

class BasePartition
{
    /**
     * 
     *
     * @var string
     */
    protected $device;
    /**
     * 
     *
     * @return string|null
     */
    public function getDevice() : ?string
    {
        return $this->device;
    }
    /**
     * 
     *
     * @param string|null $device
     *
     * @return self
     */
    public function setDevice(?string $device) : self
    {
        $this->device = $device;
        return $this;
    }
}