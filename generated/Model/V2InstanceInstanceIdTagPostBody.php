<?php

namespace Limestone\SDK\Model;

class V2InstanceInstanceIdTagPostBody
{
    /**
     * The tag to add
     *
     * @var string
     */
    protected $tag;
    /**
     * The tag to add
     *
     * @return string|null
     */
    public function getTag() : ?string
    {
        return $this->tag;
    }
    /**
     * The tag to add
     *
     * @param string|null $tag
     *
     * @return self
     */
    public function setTag(?string $tag) : self
    {
        $this->tag = $tag;
        return $this;
    }
}