<?php

namespace Limestone\SDK\Endpoint;

class DeleteProjectServer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    protected $server_id;
    /**
     * Delete a project's server by ID. This will cancel the instance
     *
     * @param string $projectId ID of project
     * @param string $serverId ID of the server to delete
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     */
    public function __construct(string $projectId, string $serverId, array $queryParameters = array())
    {
        $this->project_id = $projectId;
        $this->server_id = $serverId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{server_id}'), array($this->project_id, $this->server_id), '/v2/project/{project_id}/server/{server_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('wait'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('wait', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\DeleteProjectServerInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerUnauthorizedException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (500 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteProjectServerInternalServerErrorException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\DeleteProjectServerUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeleteProjectServerForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\DeleteProjectServerNotFoundException();
        }
    }
}