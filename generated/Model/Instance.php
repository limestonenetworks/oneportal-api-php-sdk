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
     * 
     *
     * @var Metadata[]
     */
    protected $metadata;
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