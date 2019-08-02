<?php

namespace Limestone\SDK\Model;

class SSHKey
{
    /**
     * The name of the ssh key
     *
     * @var string
     */
    protected $name;
    /**
     * The fingerprint for this ssh pub key
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * The comment for the pub key
     *
     * @var string
     */
    protected $comment;
    /**
     * The name of the ssh key
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The name of the ssh key
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
     * The fingerprint for this ssh pub key
     *
     * @return string|null
     */
    public function getFingerprint() : ?string
    {
        return $this->fingerprint;
    }
    /**
     * The fingerprint for this ssh pub key
     *
     * @param string|null $fingerprint
     *
     * @return self
     */
    public function setFingerprint(?string $fingerprint) : self
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * The comment for the pub key
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * The comment for the pub key
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