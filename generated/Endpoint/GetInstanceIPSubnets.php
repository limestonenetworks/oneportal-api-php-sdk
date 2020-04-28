<?php

namespace Limestone\SDK\Endpoint;

class GetInstanceIPSubnets extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Get an instance's IP subnets
     *
     * @param string $instanceId ID of instance to query
     */
    public function __construct(string $instanceId)
    {
        $this->instance_id = $instanceId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}/subnet');
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
     * @throws \Limestone\SDK\Exception\GetInstanceIPSubnetsForbiddenException
     * @throws \Limestone\SDK\Exception\GetInstanceIPSubnetsNotFoundException
     *
     * @return null|\Limestone\SDK\Model\IpBlock[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\IpBlock[]', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceIPSubnetsForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceIPSubnetsNotFoundException();
        }
    }
}