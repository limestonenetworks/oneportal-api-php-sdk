<?php

namespace Limestone\SDK\Model;

class JobStatus
{
    /**
     * The create time of this update
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The update time of this update
     *
     * @var string
     */
    protected $updateTime;
    /**
     * The status of this update
     *
     * @var string
     */
    protected $status;
    /**
     * The unique identifier of this update
     *
     * @var string
     */
    protected $jobIdentifier;
    /**
     * 
     *
     * @var Metadata[]
     */
    protected $metadata;
    /**
     * The create time of this update
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * The create time of this update
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The update time of this update
     *
     * @return string|null
     */
    public function getUpdateTime() : ?string
    {
        return $this->updateTime;
    }
    /**
     * The update time of this update
     *
     * @param string|null $updateTime
     *
     * @return self
     */
    public function setUpdateTime(?string $updateTime) : self
    {
        $this->updateTime = $updateTime;
        return $this;
    }
    /**
     * The status of this update
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of this update
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * The unique identifier of this update
     *
     * @return string|null
     */
    public function getJobIdentifier() : ?string
    {
        return $this->jobIdentifier;
    }
    /**
     * The unique identifier of this update
     *
     * @param string|null $jobIdentifier
     *
     * @return self
     */
    public function setJobIdentifier(?string $jobIdentifier) : self
    {
        $this->jobIdentifier = $jobIdentifier;
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