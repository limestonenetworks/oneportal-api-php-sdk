<?php

namespace Limestone\SDK\Model;

class PartitionDisk
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
     * Partition table type
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var PartitionDiskpartitionsItem[]
     */
    protected $partitions;
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
     * @return bool|null
     */
    public function getInstallBootloader() : ?bool
    {
        return $this->installBootloader;
    }
    /**
     * 
     *
     * @param bool|null $installBootloader
     *
     * @return self
     */
    public function setInstallBootloader(?bool $installBootloader) : self
    {
        $this->installBootloader = $installBootloader;
        return $this;
    }
    /**
     * Partition table type
     *
     * @return string|null
     */
    public function getLabel() : ?string
    {
        return $this->label;
    }
    /**
     * Partition table type
     *
     * @param string|null $label
     *
     * @return self
     */
    public function setLabel(?string $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return PartitionDiskpartitionsItem[]|null
     */
    public function getPartitions() : ?array
    {
        return $this->partitions;
    }
    /**
     * 
     *
     * @param PartitionDiskpartitionsItem[]|null $partitions
     *
     * @return self
     */
    public function setPartitions(?array $partitions) : self
    {
        $this->partitions = $partitions;
        return $this;
    }
}