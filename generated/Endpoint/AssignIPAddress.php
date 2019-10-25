<?php

namespace Limestone\SDK\Endpoint;

class AssignIPAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    protected $ipaddress;
    /**
     * Assign an ip address to an instance
     *
     * @param string $instanceId ID of instance to use
     * @param int $ipaddress IP to assign
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdIpaddressIpaddressPostBody $requestBody 
     */
    public function __construct(string $instanceId, int $ipaddress, \Limestone\SDK\Model\V2InstanceInstanceIdIpaddressIpaddressPostBody $requestBody)
    {
        $this->instance_id = $instanceId;
        $this->ipaddress = $ipaddress;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}', '{ipaddress}'), array($this->instance_id, $this->ipaddress), '/v2/instance/{instance_id}/ipaddress/{ipaddress}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2InstanceInstanceIdIpaddressIpaddressPostBody) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\AssignIPAddressBadRequestException
     * @throws \Limestone\SDK\Exception\AssignIPAddressForbiddenException
     * @throws \Limestone\SDK\Exception\AssignIPAddressUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\AssignIPAddressBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\AssignIPAddressForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\AssignIPAddressUnprocessableEntityException();
        }
    }
}