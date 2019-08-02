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
}