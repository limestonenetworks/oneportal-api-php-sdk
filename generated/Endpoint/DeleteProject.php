<?php

namespace Limestone\SDK\Endpoint;

class DeleteProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    /**
     * Delete a project by ID. This will recursively remove all servers assigned to the project.
     *
     * @param string $projectId ID of project to delete
     */
    public function __construct(string $projectId)
    {
        $this->project_id = $projectId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
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
     * @throws \Limestone\SDK\Exception\DeleteProjectInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteProjectForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteProjectNotFoundException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (500 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteProjectInternalServerErrorException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeleteProjectForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\DeleteProjectNotFoundException();
        }
    }
}