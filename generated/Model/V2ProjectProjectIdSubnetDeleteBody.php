<?php

namespace Limestone\SDK\Model;

class V2ProjectProjectIdSubnetDeleteBody
{
    /**
     * IP prefix to release
     *
     * @var string
     */
    protected $prefix;
    /**
     * IP prefix to release
     *
     * @return string|null
     */
    public function getPrefix() : ?string
    {
        return $this->prefix;
    }
    /**
     * IP prefix to release
     *
     * @param string|null $prefix
     *
     * @return self
     */
    public function setPrefix(?string $prefix) : self
    {
        $this->prefix = $prefix;
        return $this;
    }
}