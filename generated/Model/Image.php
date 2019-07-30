<?php

namespace Limestone\SDK\Model;

class Image
{
    /**
     * The image name
     *
     * @var string
     */
    protected $name;
    /**
     * The display name for the image
     *
     * @var string
     */
    protected $displayname;
    /**
     * The image name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The image name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * The display name for the image
     *
     * @return string
     */
    public function getDisplayname() : string
    {
        return $this->displayname;
    }
    /**
     * The display name for the image
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