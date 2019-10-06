<?php

namespace Limestone\SDK\Model;

class Job
{
    /**
     * The create time
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The update time
     *
     * @var string
     */
    protected $updateAt;
    /**
     * The status
     *
     * @var string
     */
    protected $status;
    /**
     * The name
     *
     * @var string
     */
    protected $name;
    /**
     * The job identifier
     *
     * @var string
     */
    protected $jobIdentifier;
    /**
     * The display name
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var Metadata[]
     */
    protected $metadata;
    /**
     * 
     *
     * @var JobStatus[]
     */
    protected $statuses;
    /**
     * The create time
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * The create time
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
     * The update time
     *
     * @return string|null
     */
    public function getUpdateAt() : ?string
    {
        return $this->updateAt;
    }
    /**
     * The update time
     *
     * @param string|null $updateAt
     *
     * @return self
     */
    public function setUpdateAt(?string $updateAt) : self
    {
        $this->updateAt = $updateAt;
        return $this;
    }
    /**
     * The status
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status
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
     * The name
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name
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
     * The job identifier
     *
     * @return string|null
     */
    public function getJobIdentifier() : ?string
    {
        return $this->jobIdentifier;
    }
    /**
     * The job identifier
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
     * The display name
     *
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }
    /**
     * The display name
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName) : self
    {
        $this->displayName = $displayName;
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
    /**
     * 
     *
     * @return JobStatus[]|null
     */
    public function getStatuses() : ?array
    {
        return $this->statuses;
    }
    /**
     * 
     *
     * @param JobStatus[]|null $statuses
     *
     * @return self
     */
    public function setStatuses(?array $statuses) : self
    {
        $this->statuses = $statuses;
        return $this;
    }
}