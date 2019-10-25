<?php

namespace Limestone\SDK\Model;

class Metadata
{
    /**
     * The metadata key
     *
     * @var string
     */
    protected $key;
    /**
     * The metadata value
     *
     * @var string
     */
    protected $value;
    /**
     * The metadata mutability. 0 for immutable. 1 for mutable
     *
     * @var int
     */
    protected $mutable;
    /**
     * The metadata key
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * The metadata key
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->key = $key;
        return $this;
    }
    /**
     * The metadata value
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The metadata value
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
     * The metadata mutability. 0 for immutable. 1 for mutable
     *
     * @return int|null
     */
    public function getMutable() : ?int
    {
        return $this->mutable;
    }
    /**
     * The metadata mutability. 0 for immutable. 1 for mutable
     *
     * @param int|null $mutable
     *
     * @return self
     */
    public function setMutable(?int $mutable) : self
    {
        $this->mutable = $mutable;
        return $this;
    }
}