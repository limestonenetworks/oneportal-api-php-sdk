<?php

namespace Limestone\SDK\Endpoint;

class StoreProjectServer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    /**
     * Create a server based on the given options
     *
     * @param string $projectId ID of project to use
     * @param mixed $requestBody 
     */
    public function __construct(string $projectId, $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/v2/project/{project_id}/server');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if (isset($this->body)) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\StoreProjectServerBadRequestException
     * @throws \Limestone\SDK\Exception\StoreProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\StoreProjectServerUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Limestone\SDK\Exception\StoreProjectServerBadRequestException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\StoreProjectServerForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\StoreProjectServerUnprocessableEntityException();
        }
    }
}