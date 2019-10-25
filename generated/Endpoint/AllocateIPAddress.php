<?php

namespace Limestone\SDK\Endpoint;

class AllocateIPAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Add an ip address to an instance
     *
     * @param string $instanceId ID of instance to use
     * @param \Limestone\SDK\Model\V2InstanceProjectIdIpaddressPostBody $requestBody 
     */
    public function __construct(string $instanceId, \Limestone\SDK\Model\V2InstanceProjectIdIpaddressPostBody $requestBody)
    {
        $this->instance_id = $instanceId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{project_id}/ipaddress');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2InstanceProjectIdIpaddressPostBody) {
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
     * @throws \Limestone\SDK\Exception\AllocateIPAddressBadRequestException
     * @throws \Limestone\SDK\Exception\AllocateIPAddressForbiddenException
     * @throws \Limestone\SDK\Exception\AllocateIPAddressUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\IpAddress
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\IpAddress', 'json');
        }
        if (400 === $status) {
            throw new \Limestone\SDK\Exception\AllocateIPAddressBadRequestException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\AllocateIPAddressForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\AllocateIPAddressUnprocessableEntityException();
        }
    }
}