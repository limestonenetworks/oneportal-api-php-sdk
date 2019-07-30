<?php

namespace Limestone\SDK\Model;

class FacilityStock
{
    /**
     * 
     *
     * @var string[]
     */
    protected $available;
    /**
     * 
     *
     * @var string[]
     */
    protected $unavailable;
    /**
     * 
     *
     * @var string[]
     */
    protected $low;
    /**
     * 
     *
     * @var string
     */
    protected $facility;
    /**
     * 
     *
     * @return string[]
     */
    public function getAvailable() : array
    {
        return $this->available;
    }
    /**
     * 
     *
     * @param string[] $available
     *
     * @return self
     */
    public function setAvailable(array $available) : self
    {
        $this->available = $available;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getUnavailable() : array
    {
        return $this->unavailable;
    }
    /**
     * 
     *
     * @param string[] $unavailable
     *
     * @return self
     */
    public function setUnavailable(array $unavailable) : self
    {
        $this->unavailable = $unavailable;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLow() : array
    {
        return $this->low;
    }
    /**
     * 
     *
     * @param string[] $low
     *
     * @return self
     */
    public function setLow(array $low) : self
    {
        $this->low = $low;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFacility() : string
    {
        return $this->facility;
    }
    /**
     * 
     *
     * @param string $facility
     *
     * @return self
     */
    public function setFacility(string $facility) : self
    {
        $this->facility = $facility;
        return $this;
    }
}