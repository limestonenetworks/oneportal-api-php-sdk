<?php

namespace Limestone\SDK\Endpoint;

class DeleteMetadata extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    protected $key;
    /**
     * Delete metadata from an instance
     *
     * @param string $instanceId ID of the instance
     * @param string $key The key to delete
     */
    public function __construct(string $instanceId, string $key)
    {
        $this->instance_id = $instanceId;
        $this->key = $key;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}', '{key}'), array($this->instance_id, $this->key), '/v2/instance/{instance_id}/metadata/{key}');
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
     * @throws \Limestone\SDK\Exception\DeleteMetadataBadRequestException
     * @throws \Limestone\SDK\Exception\DeleteMetadataForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Result
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteMetadataBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeleteMetadataForbiddenException();
        }
    }
}