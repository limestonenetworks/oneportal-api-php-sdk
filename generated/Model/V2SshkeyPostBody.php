<?php

namespace Limestone\SDK\Model;

class V2SshkeyPostBody
{
    /**
     * The name of the sshkey
     *
     * @var string
     */
    protected $name;
    /**
     * The public key
     *
     * @var string
     */
    protected $pubkey;
    /**
     * The comment for the key. Can also be included with the pubkey.
     *
     * @var string
     */
    protected $comment;
    /**
     * The name of the sshkey
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the sshkey
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
     * The public key
     *
     * @return string|null
     */
    public function getPubkey() : ?string
    {
        return $this->pubkey;
    }
    /**
     * The public key
     *
     * @param string|null $pubkey
     *
     * @return self
     */
    public function setPubkey(?string $pubkey) : self
    {
        $this->pubkey = $pubkey;
        return $this;
    }
    /**
     * The comment for the key. Can also be included with the pubkey.
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * The comment for the key. Can also be included with the pubkey.
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
}