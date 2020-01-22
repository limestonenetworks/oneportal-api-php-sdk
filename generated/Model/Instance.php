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
     * 
     *
     * @var Core
     */
    protected $core;
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