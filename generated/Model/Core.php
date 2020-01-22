<?php

namespace Limestone\SDK\Model;

class Core
{
    /**
     * Core ID
     *
     * @var string
     */
    protected $id;
    /**
     * Core Name
     *
     * @var string
     */
    protected $name;
    /**
     * Billing rate of the core
     *
     * @var float
     */
    protected $rate;
    /**
     * Billing interval of the core
     *
     * @var string
     */
    protected $interval;
    /**
     * Core Description
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var Metadata[]
     */
    protected $metadata;
    /**
     * Core ID
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * Core ID
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Core Name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Core Name
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
    /**
     * Billing rate of the core
     *
     * @return float|null
     */
    public function getRate() : ?float
    {
        return $this->rate;
    }
    /**
     * Billing rate of the core
     *
     * @param float|null $rate
     *
     * @return self
     */
    public function setRate(?float $rate) : self
    {
        $this->rate = $rate;
        return $this;
    }
    /**
     * Billing interval of the core
     *
     * @return string|null
     */
    public function getInterval() : ?string
    {
        return $this->interval;
    }
    /**
     * Billing interval of the core
     *
     * @param string|null $interval
     *
     * @return self
     */
    public function setInterval(?string $interval) : self
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * Core Description
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Core Description
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return Metadata[]|null
     */
    public function getMetadata() : ?array
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param Metadata[]|null $metadata
     *
     * @return self
     */
    public function setMetadata(?array $metadata) : self
    {
        $this->metadata = $metadata;
        return $this;
    }
}