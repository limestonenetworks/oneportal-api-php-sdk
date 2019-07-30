<?php

namespace Limestone\SDK\Model;

class Project
{
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
     * The project ID
     *
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }
    /**
     * The project ID
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * The display name for the project
     *
     * @return string
     */
    public function getDisplayname() : string
    {
        return $this->displayname;
    }
    /**
     * The display name for the project
     *
     * @param string $displayname
     *
     * @return self
     */
    public function setDisplayname(string $displayname) : self
    {
        $this->displayname = $displayname;
        return $this;
    }
}