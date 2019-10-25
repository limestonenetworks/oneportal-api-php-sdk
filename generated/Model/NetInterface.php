<?php

namespace Limestone\SDK\Model;

class NetInterface
{
    /**
     * The interface number
     *
     * @var int
     */
    protected $interfaceNumber;
    /**
     * The mac address
     *
     * @var string
     */
    protected $macaddress;
    /**
     * The interface type
     *
     * @var string
     */
    protected $interfaceType;
    /**
     * The IP blocks associated with this interface
     *
     * @var string[]
     */
    protected $ipBlocks;
    /**
     * The interface number
     *
     * @return int|null
     */
    public function getInterfaceNumber() : ?int
    {
        return $this->interfaceNumber;
    }
    /**
     * The interface number
     *
     * @param int|null $interfaceNumber
     *
     * @return self
     */
    public function setInterfaceNumber(?int $interfaceNumber) : self
    {
        $this->interfaceNumber = $interfaceNumber;
        return $this;
    }
    /**
     * The mac address
     *
     * @return string|null
     */
    public function getMacaddress() : ?string
    {
        return $this->macaddress;
    }
    /**
     * The mac address
     *
     * @param string|null $macaddress
     *
     * @return self
     */
    public function setMacaddress(?string $macaddress) : self
    {
        $this->macaddress = $macaddress;
        return $this;
    }
    /**
     * The interface type
     *
     * @return string|null
     */
    public function getInterfaceType() : ?string
    {
        return $this->interfaceType;
    }
    /**
     * The interface type
     *
     * @param string|null $interfaceType
     *
     * @return self
     */
    public function setInterfaceType(?string $interfaceType) : self
    {
        $this->interfaceType = $interfaceType;
        return $this;
    }
    /**
     * The IP blocks associated with this interface
     *
     * @return string[]|null
     */
    public function getIpBlocks() : ?array
    {
        return $this->ipBlocks;
    }
    /**
     * The IP blocks associated with this interface
     *
     * @param string[]|null $ipBlocks
     *
     * @return self
     */
    public function setIpBlocks(?array $ipBlocks) : self
    {
        $this->ipBlocks = $ipBlocks;
        return $this;
    }
}