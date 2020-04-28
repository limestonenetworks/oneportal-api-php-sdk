<?php

namespace Limestone\SDK\Model;

class ServerReloadParametersWithPartitions
{
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
     * 
     *
     * @var string
     */
    protected $adminPassword;
    /**
     * 
     *
     * @var string
     */
    protected $projectId;
    /**
     * Valid values: ["ssh_keys","networks","user_data","admin_password"], Use this when you modify a field from the last time you reloaded the server and want the field to be empty.
     *
     * @var string[]
     */
    protected $modified;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $partitions;
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
    /**
     * Valid values: ["ssh_keys","networks","user_data","admin_password"], Use this when you modify a field from the last time you reloaded the server and want the field to be empty.
     *
     * @return string[]|null
     */
    public function getModified() : ?array
    {
        return $this->modified;
    }
    /**
     * Valid values: ["ssh_keys","networks","user_data","admin_password"], Use this when you modify a field from the last time you reloaded the server and want the field to be empty.
     *
     * @param string[]|null $modified
     *
     * @return self
     */
    public function setModified(?array $modified) : self
    {
        $this->modified = $modified;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]|null
     */
    public function getPartitions() : ?array
    {
        return $this->partitions;
    }
    /**
     * 
     *
     * @param mixed[]|null $partitions
     *
     * @return self
     */
    public function setPartitions(?array $partitions) : self
    {
        $this->partitions = $partitions;
        return $this;
    }
}