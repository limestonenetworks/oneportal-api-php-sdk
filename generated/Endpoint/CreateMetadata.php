<?php

namespace Limestone\SDK\Endpoint;

class CreateMetadata extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Create metadata for the instance
     *
     * @param string $instanceId ID of the instance
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdMetadataPostBody $requestBody 
     */
    public function __construct(string $instanceId, \Limestone\SDK\Model\V2InstanceInstanceIdMetadataPostBody $requestBody)
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
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}/metadata');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2InstanceInstanceIdMetadataPostBody) {
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
     * @throws \Limestone\SDK\Exception\CreateMetadataBadRequestException
     * @throws \Limestone\SDK\Exception\CreateMetadataForbiddenException
     * @throws \Limestone\SDK\Exception\CreateMetadataUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Metadata
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Metadata', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\CreateMetadataBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\CreateMetadataForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\CreateMetadataUnprocessableEntityException();
        }
    }
}