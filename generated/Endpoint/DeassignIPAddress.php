<?php

namespace Limestone\SDK\Endpoint;

class DeassignIPAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    protected $ipaddress;
    /**
     * Remove an ip address from an instance
     *
     * @param string $instanceId ID of instance to use
     * @param int $ipaddress IP to remove
     */
    public function __construct(string $instanceId, int $ipaddress)
    {
        $this->instance_id = $instanceId;
        $this->ipaddress = $ipaddress;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}', '{ipaddress}'), array($this->instance_id, $this->ipaddress), '/v2/instance/{instance_id}/ipaddress/{ipaddress}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\DeassignIPAddressBadRequestException
     * @throws \Limestone\SDK\Exception\DeassignIPAddressForbiddenException
     * @throws \Limestone\SDK\Exception\DeassignIPAddressUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeassignIPAddressBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeassignIPAddressForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\DeassignIPAddressUnprocessableEntityException();
        }
    }
}