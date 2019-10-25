<?php

namespace Limestone\SDK\Endpoint;

class UpdateMetadata extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    protected $key;
    /**
     * Update metadata for the instance
     *
     * @param string $instanceId ID of the instance
     * @param string $key The key to update
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdMetadataKeyPutBody $requestBody 
     */
    public function __construct(string $instanceId, string $key, \Limestone\SDK\Model\V2InstanceInstanceIdMetadataKeyPutBody $requestBody)
    {
        $this->instance_id = $instanceId;
        $this->key = $key;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}', '{key}'), array($this->instance_id, $this->key), '/v2/instance/{instance_id}/metadata/{key}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2InstanceInstanceIdMetadataKeyPutBody) {
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
     * @throws \Limestone\SDK\Exception\UpdateMetadataBadRequestException
     * @throws \Limestone\SDK\Exception\UpdateMetadataForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Metadata
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Metadata', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\UpdateMetadataBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\UpdateMetadataForbiddenException();
        }
    }
}