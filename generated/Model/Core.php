<?php

namespace Limestone\SDK\Model;

class Core
{
    /**
     * The flavor
     *
     * @var string
     */
    protected $id;
    /**
     * The full name
     *
     * @var string
     */
    protected $name;
    /**
     * The flavor
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The flavor
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * The full name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The full name
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
}