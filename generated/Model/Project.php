<?php

namespace Limestone\SDK\Model;

class Project
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
     * The project ID
     *
     * @var string
     */
    protected $projectId;
    /**
     * The display name for the project
     *
     * @var string
     */
    protected $displayname;
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
     * The project ID
     *
     * @return string|null
     */
    public function getProjectId() : ?string
    {
        return $this->projectId;
    }
    /**
     * The project ID
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
     * The display name for the project
     *
     * @return string|null
     */
    public function getDisplayname() : ?string
    {
        return $this->displayname;
    }
    /**
     * The display name for the project
     *
     * @param string|null $displayname
     *
     * @return self
     */
    public function setDisplayname(?string $displayname) : self
    {
        $this->displayname = $displayname;
        return $this;
    }
}