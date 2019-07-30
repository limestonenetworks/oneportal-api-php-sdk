<?php

namespace Limestone\SDK\Model;

class ServerCreateParametersWithOSDisk
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
     * @var int[]
     */
    protected $sshKeys;
    /**
     * 
     *
     * @var string
     */
    protected $userData;
    /**
     * 
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
     * The disk to install the os
     *
     * @var string
     */
    protected $osDisk;
    /**
     * 
     *
     * @return string
     */
    public function getCore() : string
    {
        return $this->core;
    }
    /**
     * 
     *
     * @param string $core
     *
     * @return self
     */
    public function setCore(string $core) : self
    {
        $this->core = $core;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage() : string
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image) : self
    {
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getSshKeys() : array
    {
        return $this->sshKeys;
    }
    /**
     * 
     *
     * @param int[] $sshKeys
     *
     * @return self
     */
    public function setSshKeys(array $sshKeys) : self
    {
        $this->sshKeys = $sshKeys;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserData() : string
    {
        return $this->userData;
    }
    /**
     * 
     *
     * @param string $userData
     *
     * @return self
     */
    public function setUserData(string $userData) : self
    {
        $this->userData = $userData;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getNetworks() : array
    {
        return $this->networks;
    }
    /**
     * 
     *
     * @param string[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks) : self
    {
        $this->networks = $networks;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * List of tags to store along with this server. This is expected to be valid json.
     *
     * @return string[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * List of tags to store along with this server. This is expected to be valid json.
     *
     * @param string[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdminPassword() : string
    {
        return $this->adminPassword;
    }
    /**
     * 
     *
     * @param string $adminPassword
     *
     * @return self
     */
    public function setAdminPassword(string $adminPassword) : self
    {
        $this->adminPassword = $adminPassword;
        return $this;
    }
    /**
     * Key value hash to store along with this server. This is expected to be valid json.
     *
     * @return string[]
     */
    public function getCustomMetadata() : \ArrayObject
    {
        return $this->customMetadata;
    }
    /**
     * Key value hash to store along with this server. This is expected to be valid json.
     *
     * @param string[] $customMetadata
     *
     * @return self
     */
    public function setCustomMetadata(\ArrayObject $customMetadata) : self
    {
        $this->customMetadata = $customMetadata;
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
    /**
     * The disk to install the os
     *
     * @return string
     */
    public function getOsDisk() : string
    {
        return $this->osDisk;
    }
    /**
     * The disk to install the os
     *
     * @param string $osDisk
     *
     * @return self
     */
    public function setOsDisk(string $osDisk) : self
    {
        $this->osDisk = $osDisk;
        return $this;
    }
}