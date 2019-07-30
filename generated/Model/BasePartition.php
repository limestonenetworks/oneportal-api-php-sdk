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
     * @return string
     */
    public function getDevice() : string
    {
        return $this->device;
    }
    /**
     * 
     *
     * @param string $device
     *
     * @return self
     */
    public function setDevice(string $device) : self
    {
        $this->device = $device;
        return $this;
    }
}