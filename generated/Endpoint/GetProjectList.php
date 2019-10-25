<?php

namespace Limestone\SDK\Endpoint;

class GetProjectList extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v2/project';
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
     * @throws \Limestone\SDK\Exception\GetProjectListUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetProjectListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Project[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Project[]', 'json');
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectListUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectListForbiddenException();
        }
    }
}