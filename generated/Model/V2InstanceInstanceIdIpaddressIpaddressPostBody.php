<?php

namespace Limestone\SDK\Model;

class V2InstanceInstanceIdIpaddressIpaddressPostBody
{
    /**
     * The interface to bind to
     *
     * @var int
     */
    protected $interface;
    /**
     * The interface to bind to
     *
     * @return int|null
     */
    public function getInterface() : ?int
    {
        return $this->interface;
    }
    /**
     * The interface to bind to
     *
     * @param int|null $interface
     *
     * @return self
     */
    public function setInterface(?int $interface) : self
    {
        $this->interface = $interface;
        return $this;
    }
}