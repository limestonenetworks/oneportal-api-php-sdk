<?php

namespace Limestone\SDK\Endpoint;

class GetTags extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Get all tags for an instance
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
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}/tag');
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
     * @throws \Limestone\SDK\Exception\GetTagsForbiddenException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return json_decode($body);
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetTagsForbiddenException();
        }
    }
}