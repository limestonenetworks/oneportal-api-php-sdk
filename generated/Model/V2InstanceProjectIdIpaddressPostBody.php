<?php

namespace Limestone\SDK\Model;

class V2InstanceProjectIdIpaddressPostBody
{
    /**
     * The cidr range to assign
     *
     * @var int
     */
    protected $cidr;
    /**
     * The network to assign the ip on
     *
     * @var string
     */
    protected $network;
    /**
     * The cidr range to assign
     *
     * @return int|null
     */
    public function getCidr() : ?int
    {
        return $this->cidr;
    }
    /**
     * The cidr range to assign
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
     * The network to assign the ip on
     *
     * @return string|null
     */
    public function getNetwork() : ?string
    {
        return $this->network;
    }
    /**
     * The network to assign the ip on
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
}