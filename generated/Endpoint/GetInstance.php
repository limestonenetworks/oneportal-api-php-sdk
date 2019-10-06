<?php

namespace Limestone\SDK\Endpoint;

class GetInstance extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Get an instance by ID
     *
     * @param string $instanceId ID of instance to return
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
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}');
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
     * @throws \Limestone\SDK\Exception\GetInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\GetInstanceNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Instance
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Instance', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceNotFoundException();
        }
    }
}