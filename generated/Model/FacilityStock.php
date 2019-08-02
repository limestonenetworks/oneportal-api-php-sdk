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
     * @return string[]|null
     */
    public function getAvailable() : ?array
    {
        return $this->available;
    }
    /**
     * 
     *
     * @param string[]|null $available
     *
     * @return self
     */
    public function setAvailable(?array $available) : self
    {
        $this->available = $available;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getUnavailable() : ?array
    {
        return $this->unavailable;
    }
    /**
     * 
     *
     * @param string[]|null $unavailable
     *
     * @return self
     */
    public function setUnavailable(?array $unavailable) : self
    {
        $this->unavailable = $unavailable;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getLow() : ?array
    {
        return $this->low;
    }
    /**
     * 
     *
     * @param string[]|null $low
     *
     * @return self
     */
    public function setLow(?array $low) : self
    {
        $this->low = $low;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFacility() : ?string
    {
        return $this->facility;
    }
    /**
     * 
     *
     * @param string|null $facility
     *
     * @return self
     */
    public function setFacility(?string $facility) : self
    {
        $this->facility = $facility;
        return $this;
    }
}