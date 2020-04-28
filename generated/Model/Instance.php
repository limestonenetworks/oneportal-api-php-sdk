<?php

namespace Limestone\SDK\Model;

class Instance
{
    /**
     * The resource uuid
     *
     * @var string
     */
    protected $uuid;
    /**
     * The resource short uuid
     *
     * @var string
     */
    protected $shortUuid;
    /**
     * The display name for the instance
     *
     * @var string
     */
    protected $name;
    /**
     * The host name for the instance
     *
     * @var string
     */
    protected $hostname;
    /**
     * The server_id for the instance
     *
     * @var string
     */
    protected $serverId;
    /**
     * The project_id for the instance
     *
     * @var string
     */
    protected $projectId;
    /**
     * The status of the instance
     *
     * @var string
     */
    protected $status;
    /**
     * The management IP of the instance
     *
     * @var string
     */
    protected $managementIp;
    /**
     * The date that the instance was provisioned
     *
     * @var string
     */
    protected $provisionDate;
    /**
     * The job id for the create job of this instance
     *
     * @var string
     */
    protected $createJob;
    /**
     * The type of the item (instance)
     *
     * @var string
     */
    protected $itemType;
    /**
     * 
     *
     * @var Core
     */
    protected $core;
    /**
     * 
     *
     * @var Facility
     */
    protected $facility;
    /**
     * 
     *
     * @var Metadata[]
     */
    protected $metadata;
    /**
     * 
     *
     * @var string[]
     */
    protected $tags;
    /**
     * 
     *
     * @var IpBlock[]
     */
    protected $ipSubnets;
    /**
     * 
     *
     * @var EventLog[]
     */
    protected $latestProvision;
    /**
     * 
     *
     * @var NetInterface[]
     */
    protected $netInterfaces;
    /**
     * The resource uuid
     *
     * @return string|null
     */
    public function getUuid() : ?string
    {
        return $this->uuid;
    }
    /**
     * The resource uuid
     *
     * @param string|null $uuid
     *
     * @return self
     */
    public function setUuid(?string $uuid) : self
    {
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * The resource short uuid
     *
     * @return string|null
     */
    public function getShortUuid() : ?string
    {
        return $this->shortUuid;
    }
    /**
     * The resource short uuid
     *
     * @param string|null $shortUuid
     *
     * @return self
     */
    public function setShortUuid(?string $shortUuid) : self
    {
        $this->shortUuid = $shortUuid;
        return $this;
    }
    /**
     * The display name for the instance
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The display name for the instance
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
     * The host name for the instance
     *
     * @return string|null
     */
    public function getHostname() : ?string
    {
        return $this->hostname;
    }
    /**
     * The host name for the instance
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname) : self
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * The server_id for the instance
     *
     * @return string|null
     */
    public function getServerId() : ?string
    {
        return $this->serverId;
    }
    /**
     * The server_id for the instance
     *
     * @param string|null $serverId
     *
     * @return self
     */
    public function setServerId(?string $serverId) : self
    {
        $this->serverId = $serverId;
        return $this;
    }
    /**
     * The project_id for the instance
     *
     * @return string|null
     */
    public function getProjectId() : ?string
    {
        return $this->projectId;
    }
    /**
     * The project_id for the instance
     *
     * @param string|null $projectId
     *
     * @return self
     */
    public function setProjectId(?string $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The status of the instance
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * The status of the instance
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
     * The management IP of the instance
     *
     * @return string|null
     */
    public function getManagementIp() : ?string
    {
        return $this->managementIp;
    }
    /**
     * The management IP of the instance
     *
     * @param string|null $managementIp
     *
     * @return self
     */
    public function setManagementIp(?string $managementIp) : self
    {
        $this->managementIp = $managementIp;
        return $this;
    }
    /**
     * The date that the instance was provisioned
     *
     * @return string|null
     */
    public function getProvisionDate() : ?string
    {
        return $this->provisionDate;
    }
    /**
     * The date that the instance was provisioned
     *
     * @param string|null $provisionDate
     *
     * @return self
     */
    public function setProvisionDate(?string $provisionDate) : self
    {
        $this->provisionDate = $provisionDate;
        return $this;
    }
    /**
     * The job id for the create job of this instance
     *
     * @return string|null
     */
    public function getCreateJob() : ?string
    {
        return $this->createJob;
    }
    /**
     * The job id for the create job of this instance
     *
     * @param string|null $createJob
     *
     * @return self
     */
    public function setCreateJob(?string $createJob) : self
    {
        $this->createJob = $createJob;
        return $this;
    }
    /**
     * The type of the item (instance)
     *
     * @return string|null
     */
    public function getItemType() : ?string
    {
        return $this->itemType;
    }
    /**
     * The type of the item (instance)
     *
     * @param string|null $itemType
     *
     * @return self
     */
    public function setItemType(?string $itemType) : self
    {
        $this->itemType = $itemType;
        return $this;
    }
    /**
     * 
     *
     * @return Core|null
     */
    public function getCore() : ?Core
    {
        return $this->core;
    }
    /**
     * 
     *
     * @param Core|null $core
     *
     * @return self
     */
    public function setCore(?Core $core) : self
    {
        $this->core = $core;
        return $this;
    }
    /**
     * 
     *
     * @return Facility|null
     */
    public function getFacility() : ?Facility
    {
        return $this->facility;
    }
    /**
     * 
     *
     * @param Facility|null $facility
     *
     * @return self
     */
    public function setFacility(?Facility $facility) : self
    {
        $this->facility = $facility;
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
     * @return string[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param string[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return IpBlock[]|null
     */
    public function getIpSubnets() : ?array
    {
        return $this->ipSubnets;
    }
    /**
     * 
     *
     * @param IpBlock[]|null $ipSubnets
     *
     * @return self
     */
    public function setIpSubnets(?array $ipSubnets) : self
    {
        $this->ipSubnets = $ipSubnets;
        return $this;
    }
    /**
     * 
     *
     * @return EventLog[]|null
     */
    public function getLatestProvision() : ?array
    {
        return $this->latestProvision;
    }
    /**
     * 
     *
     * @param EventLog[]|null $latestProvision
     *
     * @return self
     */
    public function setLatestProvision(?array $latestProvision) : self
    {
        $this->latestProvision = $latestProvision;
        return $this;
    }
    /**
     * 
     *
     * @return NetInterface[]|null
     */
    public function getNetInterfaces() : ?array
    {
        return $this->netInterfaces;
    }
    /**
     * 
     *
     * @param NetInterface[]|null $netInterfaces
     *
     * @return self
     */
    public function setNetInterfaces(?array $netInterfaces) : self
    {
        $this->netInterfaces = $netInterfaces;
        return $this;
    }
}