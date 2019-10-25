<?php

namespace Limestone\SDK\Endpoint;

class CreateTag extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Create tag for the instance
     *
     * @param string $instanceId ID of the instance
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdTagPostBody $requestBody 
     */
    public function __construct(string $instanceId, \Limestone\SDK\Model\V2InstanceInstanceIdTagPostBody $requestBody)
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
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}/tag');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2InstanceInstanceIdTagPostBody) {
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
     * @throws \Limestone\SDK\Exception\CreateTagBadRequestException
     * @throws \Limestone\SDK\Exception\CreateTagForbiddenException
     * @throws \Limestone\SDK\Exception\CreateTagUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return json_decode($body);
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\CreateTagBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\CreateTagForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\CreateTagUnprocessableEntityException();
        }
    }
}