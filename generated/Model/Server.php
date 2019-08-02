<?php

namespace Limestone\SDK\Model;

class Server
{
    /**
     * 
     *
     * @var string
     */
    protected $serverId;
    /**
     * 
     *
     * @return string|null
     */
    public function getServerId() : ?string
    {
        return $this->serverId;
    }
    /**
     * 
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