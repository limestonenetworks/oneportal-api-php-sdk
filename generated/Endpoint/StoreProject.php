<?php

namespace Limestone\SDK\Endpoint;

class StoreProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Create a project based on the given options
     *
     * @param \Limestone\SDK\Model\V2ProjectPostBody $requestBody 
     */
    public function __construct(\Limestone\SDK\Model\V2ProjectPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v2/project';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2ProjectPostBody) {
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
     * @throws \Limestone\SDK\Exception\StoreProjectBadRequestException
     * @throws \Limestone\SDK\Exception\StoreProjectUnauthorizedException
     * @throws \Limestone\SDK\Exception\StoreProjectForbiddenException
     * @throws \Limestone\SDK\Exception\StoreProjectUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Project
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Project', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\StoreProjectBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\StoreProjectUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\StoreProjectForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\StoreProjectUnprocessableEntityException();
        }
    }
}