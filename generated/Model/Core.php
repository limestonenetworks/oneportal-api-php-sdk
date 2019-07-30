<?php

namespace Limestone\SDK\Model;

class Core
{
    /**
     * The short name (flavor)
     *
     * @var string
     */
    protected $shortname;
    /**
     * The full name
     *
     * @var string
     */
    protected $name;
    /**
     * The number of processors
     *
     * @var int
     */
    protected $processors;
    /**
     * The amount of cores
     *
     * @var string
     */
    protected $cores;
    /**
     * The processor speed
     *
     * @var string
     */
    protected $speed;
    /**
     * The core name
     *
     * @var string
     */
    protected $corename;
    /**
     * The istarting monthly price
     *
     * @var mixed
     */
    protected $startmonthly;
    /**
     * The short name (flavor)
     *
     * @return string
     */
    public function getShortname() : string
    {
        return $this->shortname;
    }
    /**
     * The short name (flavor)
     *
     * @param string $shortname
     *
     * @return self
     */
    public function setShortname(string $shortname) : self
    {
        $this->shortname = $shortname;
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
    /**
     * The number of processors
     *
     * @return int
     */
    public function getProcessors() : int
    {
        return $this->processors;
    }
    /**
     * The number of processors
     *
     * @param int $processors
     *
     * @return self
     */
    public function setProcessors(int $processors) : self
    {
        $this->processors = $processors;
        return $this;
    }
    /**
     * The amount of cores
     *
     * @return string
     */
    public function getCores() : string
    {
        return $this->cores;
    }
    /**
     * The amount of cores
     *
     * @param string $cores
     *
     * @return self
     */
    public function setCores(string $cores) : self
    {
        $this->cores = $cores;
        return $this;
    }
    /**
     * The processor speed
     *
     * @return string
     */
    public function getSpeed() : string
    {
        return $this->speed;
    }
    /**
     * The processor speed
     *
     * @param string $speed
     *
     * @return self
     */
    public function setSpeed(string $speed) : self
    {
        $this->speed = $speed;
        return $this;
    }
    /**
     * The core name
     *
     * @return string
     */
    public function getCorename() : string
    {
        return $this->corename;
    }
    /**
     * The core name
     *
     * @param string $corename
     *
     * @return self
     */
    public function setCorename(string $corename) : self
    {
        $this->corename = $corename;
        return $this;
    }
    /**
     * The istarting monthly price
     *
     * @return mixed
     */
    public function getStartmonthly()
    {
        return $this->startmonthly;
    }
    /**
     * The istarting monthly price
     *
     * @param mixed $startmonthly
     *
     * @return self
     */
    public function setStartmonthly($startmonthly) : self
    {
        $this->startmonthly = $startmonthly;
        return $this;
    }
}