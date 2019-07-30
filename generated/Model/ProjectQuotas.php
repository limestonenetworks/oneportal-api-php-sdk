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
     * @return int
     */
    public function getMaxIps() : int
    {
        return $this->maxIps;
    }
    /**
     * 
     *
     * @param int $maxIps
     *
     * @return self
     */
    public function setMaxIps(int $maxIps) : self
    {
        $this->maxIps = $maxIps;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxServers() : int
    {
        return $this->maxServers;
    }
    /**
     * 
     *
     * @param int $maxServers
     *
     * @return self
     */
    public function setMaxServers(int $maxServers) : self
    {
        $this->maxServers = $maxServers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUsedServers() : int
    {
        return $this->usedServers;
    }
    /**
     * 
     *
     * @param int $usedServers
     *
     * @return self
     */
    public function setUsedServers(int $usedServers) : self
    {
        $this->usedServers = $usedServers;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUsedIps() : int
    {
        return $this->usedIps;
    }
    /**
     * 
     *
     * @param int $usedIps
     *
     * @return self
     */
    public function setUsedIps(int $usedIps) : self
    {
        $this->usedIps = $usedIps;
        return $this;
    }
}