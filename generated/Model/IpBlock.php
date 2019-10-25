<?php

namespace Limestone\SDK\Model;

class IpBlock
{
    /**
     * Network with CIDR
     *
     * @var string
     */
    protected $block;
    /**
     * Network address of subnet
     *
     * @var string
     */
    protected $network;
    /**
     * The CIDR of the subnet
     *
     * @var int
     */
    protected $cidr;
    /**
     * Netmask of the subnet
     *
     * @var string
     */
    protected $netmask;
    /**
     * Create timestamp of IP block allocation
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The type of network
     *
     * @var string
     */
    protected $networkType;
    /**
     * Network with CIDR
     *
     * @return string|null
     */
    public function getBlock() : ?string
    {
        return $this->block;
    }
    /**
     * Network with CIDR
     *
     * @param string|null $block
     *
     * @return self
     */
    public function setBlock(?string $block) : self
    {
        $this->block = $block;
        return $this;
    }
    /**
     * Network address of subnet
     *
     * @return string|null
     */
    public function getNetwork() : ?string
    {
        return $this->network;
    }
    /**
     * Network address of subnet
     *
     * @param string|null $network
     *
     * @return self
     */
    public function setNetwork(?string $network) : self
    {
        $this->network = $network;
        return $this;
    }
    /**
     * The CIDR of the subnet
     *
     * @return int|null
     */
    public function getCidr() : ?int
    {
        return $this->cidr;
    }
    /**
     * The CIDR of the subnet
     *
     * @param int|null $cidr
     *
     * @return self
     */
    public function setCidr(?int $cidr) : self
    {
        $this->cidr = $cidr;
        return $this;
    }
    /**
     * Netmask of the subnet
     *
     * @return string|null
     */
    public function getNetmask() : ?string
    {
        return $this->netmask;
    }
    /**
     * Netmask of the subnet
     *
     * @param string|null $netmask
     *
     * @return self
     */
    public function setNetmask(?string $netmask) : self
    {
        $this->netmask = $netmask;
        return $this;
    }
    /**
     * Create timestamp of IP block allocation
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * Create timestamp of IP block allocation
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The type of network
     *
     * @return string|null
     */
    public function getNetworkType() : ?string
    {
        return $this->networkType;
    }
    /**
     * The type of network
     *
     * @param string|null $networkType
     *
     * @return self
     */
    public function setNetworkType(?string $networkType) : self
    {
        $this->networkType = $networkType;
        return $this;
    }
}