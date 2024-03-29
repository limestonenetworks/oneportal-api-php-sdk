<?php

namespace Limestone\SDK\Model;

class V2ProjectProjectIdServerServerIdPostBody
{
    /**
     * The server_id to associate
     *
     * @var string
     */
    protected $serverId;
    /**
     * The server_id to associate
     *
     * @return string|null
     */
    public function getServerId() : ?string
    {
        return $this->serverId;
    }
    /**
     * The server_id to associate
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
}