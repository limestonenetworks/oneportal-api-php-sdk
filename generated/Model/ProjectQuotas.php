<?php

namespace Limestone\SDK\Model;

class ProjectQuotas
{
    /**
     * 
     *
     * @var int
     */
    protected $maxIps;
    /**
     * 
     *
     * @var int
     */
    protected $maxServers;
    /**
     * 
     *
     * @var int
     */
    protected $usedServers;
    /**
     * 
     *
     * @var int
     */
    protected $usedIps;
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxIps() : ?int
    {
        return $this->maxIps;
    }
    /**
     * 
     *
     * @param int|null $maxIps
     *
     * @return self
     */
    public function setMaxIps(?int $maxIps) : self
    {
        $this->maxIps = $maxIps;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxServers() : ?int
    {
        return $this->maxServers;
    }
    /**
     * 
     *
     * @param int|null $maxServers
     *
     * @return self
     */
    public function setMaxServers(?int $maxServers) : self
    {
        $this->maxServers = $maxServers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsedServers() : ?int
    {
        return $this->usedServers;
    }
    /**
     * 
     *
     * @param int|null $usedServers
     *
     * @return self
     */
    public function setUsedServers(?int $usedServers) : self
    {
        $this->usedServers = $usedServers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getUsedIps() : ?int
    {
        return $this->usedIps;
    }
    /**
     * 
     *
     * @param int|null $usedIps
     *
     * @return self
     */
    public function setUsedIps(?int $usedIps) : self
    {
        $this->usedIps = $usedIps;
        return $this;
    }
}