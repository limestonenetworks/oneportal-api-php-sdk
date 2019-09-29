<?php

namespace Limestone\SDK\Model;

class RaidDisk
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
     * @var RaidDiskraid
     */
    protected $raid;
    /**
     * 
     *
     * @var string
     */
    protected $format;
    /**
     * 
     *
     * @var string
     */
    protected $formatOptions;
    /**
     * Build a cloud-init config drive on this device.
     *
     * @var bool
     */
    protected $configDrive;
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
    /**
     * 
     *
     * @return RaidDiskraid|null
     */
    public function getRaid() : ?RaidDiskraid
    {
        return $this->raid;
    }
    /**
     * 
     *
     * @param RaidDiskraid|null $raid
     *
     * @return self
     */
    public function setRaid(?RaidDiskraid $raid) : self
    {
        $this->raid = $raid;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormatOptions() : ?string
    {
        return $this->formatOptions;
    }
    /**
     * 
     *
     * @param string|null $formatOptions
     *
     * @return self
     */
    public function setFormatOptions(?string $formatOptions) : self
    {
        $this->formatOptions = $formatOptions;
        return $this;
    }
    /**
     * Build a cloud-init config drive on this device.
     *
     * @return bool|null
     */
    public function getConfigDrive() : ?bool
    {
        return $this->configDrive;
    }
    /**
     * Build a cloud-init config drive on this device.
     *
     * @param bool|null $configDrive
     *
     * @return self
     */
    public function setConfigDrive(?bool $configDrive) : self
    {
        $this->configDrive = $configDrive;
        return $this;
    }
}