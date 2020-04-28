<?php

namespace Limestone\SDK\Model;

class V2ProjectPostBody
{
    /**
     * Project friendly display name
     *
     * @var string
     */
    protected $name;
    /**
     * Project friendly display name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Project friendly display name
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
}