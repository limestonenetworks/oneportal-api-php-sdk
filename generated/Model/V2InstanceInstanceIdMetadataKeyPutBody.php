<?php

namespace Limestone\SDK\Model;

class V2InstanceInstanceIdMetadataKeyPutBody
{
    /**
     * The value of the metadata
     *
     * @var string
     */
    protected $value;
    /**
     * The mutability of the metadata
     *
     * @var int
     */
    protected $mutablility;
    /**
     * The value of the metadata
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value of the metadata
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * The mutability of the metadata
     *
     * @return int|null
     */
    public function getMutablility() : ?int
    {
        return $this->mutablility;
    }
    /**
     * The mutability of the metadata
     *
     * @param int|null $mutablility
     *
     * @return self
     */
    public function setMutablility(?int $mutablility) : self
    {
        $this->mutablility = $mutablility;
        return $this;
    }
}