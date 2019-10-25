<?php

namespace Limestone\SDK\Endpoint;

class GetProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    /**
     * Get a project by ID
     *
     * @param string $projectId ID of project to return
     */
    public function __construct(string $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}'), array($this->project_id), '/v2/project/{project_id}');
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
     * @throws \Limestone\SDK\Exception\GetProjectUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetProjectForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Project
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Project', 'json');
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectNotFoundException();
        }
    }
}