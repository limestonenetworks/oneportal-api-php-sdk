<?php

namespace Limestone\SDK\Model;

class IpAddress
{
    /**
     * The long ip address
     *
     * @var int
     */
    protected $ip;
    /**
     * The cidr
     *
     * @var int
     */
    protected $cidr;
    /**
     * The human readable ip address
     *
     * @var string
     */
    protected $readableIp;
    /**
     * The type of network
     *
     * @var string
     */
    protected $networkType;
    /**
     * The long ip address
     *
     * @return int|null
     */
    public function getIp() : ?int
    {
        return $this->ip;
    }
    /**
     * The long ip address
     *
     * @param int|null $ip
     *
     * @return self
     */
    public function setIp(?int $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * The cidr
     *
     * @return int|null
     */
    public function getCidr() : ?int
    {
        return $this->cidr;
    }
    /**
     * The cidr
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
     * The human readable ip address
     *
     * @return string|null
     */
    public function getReadableIp() : ?string
    {
        return $this->readableIp;
    }
    /**
     * The human readable ip address
     *
     * @param string|null $readableIp
     *
     * @return self
     */
    public function setReadableIp(?string $readableIp) : self
    {
        $this->readableIp = $readableIp;
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