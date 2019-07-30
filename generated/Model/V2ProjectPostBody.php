<?php

namespace Limestone\SDK\Model;

class V2ProjectPostBody
{
    /**
     * Project friendly display name
     *
     * @var string
     */
    protected $displayname;
    /**
     * Project friendly display name
     *
     * @return string
     */
    public function getDisplayname() : string
    {
        return $this->displayname;
    }
    /**
     * Project friendly display name
     *
     * @param string $displayname
     *
     * @return self
     */
    public function setDisplayname(string $displayname) : self
    {
        $this->displayname = $displayname;
        return $this;
    }
}