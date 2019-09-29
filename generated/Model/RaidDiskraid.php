<?php

namespace Limestone\SDK\Model;

class RaidDiskraid
{
    /**
     * RAID level
     *
     * @var string
     */
    protected $level;
    /**
     * RAID member devices
     *
     * @var string[]
     */
    protected $components;
    /**
     * RAID level
     *
     * @return string|null
     */
    public function getLevel() : ?string
    {
        return $this->level;
    }
    /**
     * RAID level
     *
     * @param string|null $level
     *
     * @return self
     */
    public function setLevel(?string $level) : self
    {
        $this->level = $level;
        return $this;
    }
    /**
     * RAID member devices
     *
     * @return string[]|null
     */
    public function getComponents() : ?array
    {
        return $this->components;
    }
    /**
     * RAID member devices
     *
     * @param string[]|null $components
     *
     * @return self
     */
    public function setComponents(?array $components) : self
    {
        $this->components = $components;
        return $this;
    }
}