<?php

namespace Limestone\SDK\Endpoint;

class CanCreateProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v2/user/can_create_project';
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
     * @throws \Limestone\SDK\Exception\CanCreateProjectForbiddenException
     * @throws \Limestone\SDK\Exception\CanCreateProjectUnauthorizedException
     *
     * @return null|\Limestone\SDK\Model\Result
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json');
        }
        if (403 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\CanCreateProjectForbiddenException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\CanCreateProjectUnauthorizedException();
        }
    }
}