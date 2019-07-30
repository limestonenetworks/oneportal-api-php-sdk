<?php

namespace Limestone\SDK\Model;

class RaidPartition
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
     * @var string
     */
    protected $format;
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
    /**
     * 
     *
     * @return string
     */
    public function getFormat() : string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string $format
     *
     * @return self
     */
    public function setFormat(string $format) : self
    {
        $this->format = $format;
        return $this;
    }
}