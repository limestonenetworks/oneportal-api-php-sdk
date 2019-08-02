<?php

namespace Limestone\SDK\Model;

class V2SshkeyGetResponse200
{
    /**
     * 
     *
     * @var SSHKey[]
     */
    protected $keys;
    /**
     * 
     *
     * @return SSHKey[]|null
     */
    public function getKeys() : ?array
    {
        return $this->keys;
    }
    /**
     * 
     *
     * @param SSHKey[]|null $keys
     *
     * @return self
     */
    public function setKeys(?array $keys) : self
    {
        $this->keys = $keys;
        return $this;
    }
}