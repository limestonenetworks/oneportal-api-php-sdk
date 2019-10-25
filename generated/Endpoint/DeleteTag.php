<?php

namespace Limestone\SDK\Endpoint;

class DeleteTag extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    protected $tag;
    /**
     * Delete tag from an instance
     *
     * @param string $instanceId ID of the instance
     * @param string $tag The tag to remove
     */
    public function __construct(string $instanceId, string $tag)
    {
        $this->instance_id = $instanceId;
        $this->tag = $tag;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}', '{tag}'), array($this->instance_id, $this->tag), '/v2/instance/{instance_id}/tag/{tag}');
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
     * @throws \Limestone\SDK\Exception\DeleteTagBadRequestException
     * @throws \Limestone\SDK\Exception\DeleteTagForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Result
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteTagBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeleteTagForbiddenException();
        }
    }
}