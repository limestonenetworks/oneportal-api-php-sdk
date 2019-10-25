<?php

namespace Limestone\SDK\Endpoint;

class GetProjectServers extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    /**
     * Get a project's instances
     *
     * @param string $projectId ID of project to return servers for
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
        return str_replace(array('{project_id}'), array($this->project_id), '/v2/project/{project_id}/server');
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
     * @throws \Limestone\SDK\Exception\GetProjectServersUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetProjectServersForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectServersNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Instance[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Instance[]', 'json');
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectServersUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectServersForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetProjectServersNotFoundException();
        }
    }
}