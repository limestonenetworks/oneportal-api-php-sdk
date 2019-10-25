<?php

namespace Limestone\SDK\Endpoint;

class GetMetadata extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Get all metadata for an instance
     *
     * @param string $instanceId ID of the instance
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
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}/metadata');
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
     * @throws \Limestone\SDK\Exception\GetMetadataForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Metadata[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Metadata[]', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetMetadataForbiddenException();
        }
    }
}