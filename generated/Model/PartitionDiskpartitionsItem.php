<?php

namespace Limestone\SDK\Model;

class PartitionDiskpartitionsItem
{
    /**
     * Partition name
     *
     * @var string
     */
    protected $name;
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
     * Size in megabytes. If not provided, the partition will consume all remaining available space on the disk.
     *
     * @var int
     */
    protected $size;
    /**
     * Partition flags
     *
     * @var string[]
     */
    protected $flags;
    /**
     * Partition name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Partition name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
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
     * Size in megabytes. If not provided, the partition will consume all remaining available space on the disk.
     *
     * @return int|null
     */
    public function getSize() : ?int
    {
        return $this->size;
    }
    /**
     * Size in megabytes. If not provided, the partition will consume all remaining available space on the disk.
     *
     * @param int|null $size
     *
     * @return self
     */
    public function setSize(?int $size) : self
    {
        $this->size = $size;
        return $this;
    }
    /**
     * Partition flags
     *
     * @return string[]|null
     */
    public function getFlags() : ?array
    {
        return $this->flags;
    }
    /**
     * Partition flags
     *
     * @param string[]|null $flags
     *
     * @return self
     */
    public function setFlags(?array $flags) : self
    {
        $this->flags = $flags;
        return $this;
    }
}