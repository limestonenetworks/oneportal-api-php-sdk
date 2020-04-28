<?php

namespace Limestone\SDK\Model;

class EventLog
{
    /**
     * The uuid of the event
     *
     * @var string
     */
    protected $uuid;
    /**
     * The type of the event
     *
     * @var string
     */
    protected $event;
    /**
     * The timestamp of the event
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The message
     *
     * @var string
     */
    protected $message;
    /**
     * The data in json format
     *
     * @var string
     */
    protected $data;
    /**
     * The uuid of the event
     *
     * @return string|null
     */
    public function getUuid() : ?string
    {
        return $this->uuid;
    }
    /**
     * The uuid of the event
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
     * The type of the event
     *
     * @return string|null
     */
    public function getEvent() : ?string
    {
        return $this->event;
    }
    /**
     * The type of the event
     *
     * @param string|null $event
     *
     * @return self
     */
    public function setEvent(?string $event) : self
    {
        $this->event = $event;
        return $this;
    }
    /**
     * The timestamp of the event
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * The timestamp of the event
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The message
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * The message
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * The data in json format
     *
     * @return string|null
     */
    public function getData() : ?string
    {
        return $this->data;
    }
    /**
     * The data in json format
     *
     * @param string|null $data
     *
     * @return self
     */
    public function setData(?string $data) : self
    {
        $this->data = $data;
        return $this;
    }
}