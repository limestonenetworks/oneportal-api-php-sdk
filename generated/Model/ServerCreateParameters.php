<?php

namespace Limestone\SDK\Model;

class ServerCreateParameters
{
    /**
     * 
     *
     * @var string
     */
    protected $core;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $hostName;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $image;
    /**
     * 
     *
     * @var string[]
     */
    protected $sshKeys;
    /**
     * 
     *
     * @var string
     */
    protected $userData;
    /**
     * Valid values: ["public","private","public_ddos"]
     *
     * @var string[]
     */
    protected $networks;
    /**
     * 
     *
     * @var int
     */
    protected $quantity;
    /**
     * List of tags to store along with this server. This is expected to be valid json.
     *
     * @var string[]
     */
    protected $tags;
    /**
     * 
     *
     * @var string
     */
    protected $adminPassword;
    /**
     * Key value hash to store along with this server. This is expected to be valid json.
     *
     * @var string[]
     */
    protected $customMetadata;
    /**
     * 
     *
     * @var string
     */
    protected $facility;
    /**
     * 
     *
     * @var string
     */
    protected $projectId;
    /**
     * 
     *
     * @return string|null
     */
    public function getCore() : ?string
    {
        return $this->core;
    }
    /**
     * 
     *
     * @param string|null $core
     *
     * @return self
     */
    public function setCore(?string $core) : self
    {
        $this->core = $core;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getHostName() : ?string
    {
        return $this->hostName;
    }
    /**
     * 
     *
     * @param string|null $hostName
     *
     * @return self
     */
    public function setHostName(?string $hostName) : self
    {
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
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
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image) : self
    {
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getSshKeys() : ?array
    {
        return $this->sshKeys;
    }
    /**
     * 
     *
     * @param string[]|null $sshKeys
     *
     * @return self
     */
    public function setSshKeys(?array $sshKeys) : self
    {
        $this->sshKeys = $sshKeys;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUserData() : ?string
    {
        return $this->userData;
    }
    /**
     * 
     *
     * @param string|null $userData
     *
     * @return self
     */
    public function setUserData(?string $userData) : self
    {
        $this->userData = $userData;
        return $this;
    }
    /**
     * Valid values: ["public","private","public_ddos"]
     *
     * @return string[]|null
     */
    public function getNetworks() : ?array
    {
        return $this->networks;
    }
    /**
     * Valid values: ["public","private","public_ddos"]
     *
     * @param string[]|null $networks
     *
     * @return self
     */
    public function setNetworks(?array $networks) : self
    {
        $this->networks = $networks;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * List of tags to store along with this server. This is expected to be valid json.
     *
     * @return string[]|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * List of tags to store along with this server. This is expected to be valid json.
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
     * @return string|null
     */
    public function getAdminPassword() : ?string
    {
        return $this->adminPassword;
    }
    /**
     * 
     *
     * @param string|null $adminPassword
     *
     * @return self
     */
    public function setAdminPassword(?string $adminPassword) : self
    {
        $this->adminPassword = $adminPassword;
        return $this;
    }
    /**
     * Key value hash to store along with this server. This is expected to be valid json.
     *
     * @return string[]|null
     */
    public function getCustomMetadata() : ?\ArrayObject
    {
        return $this->customMetadata;
    }
    /**
     * Key value hash to store along with this server. This is expected to be valid json.
     *
     * @param string[]|null $customMetadata
     *
     * @return self
     */
    public function setCustomMetadata(?\ArrayObject $customMetadata) : self
    {
        $this->customMetadata = $customMetadata;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getProjectId() : ?string
    {
        return $this->projectId;
    }
    /**
     * 
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
}