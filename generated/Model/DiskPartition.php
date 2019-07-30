<?php

namespace Limestone\SDK\Model;

class DiskPartition
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
     * @var bool
     */
    protected $installBootloader;
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
     * @return bool
     */
    public function getInstallBootloader() : bool
    {
        return $this->installBootloader;
    }
    /**
     * 
     *
     * @param bool $installBootloader
     *
     * @return self
     */
    public function setInstallBootloader(bool $installBootloader) : self
    {
        $this->installBootloader = $installBootloader;
        return $this;
    }
}