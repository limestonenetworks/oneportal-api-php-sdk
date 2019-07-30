<?php

namespace Limestone\SDK\Endpoint;

class AssociateProjectServer extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    /**
     * Associate a server with a project
     *
     * @param string $projectId ID of project to use
     * @param \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody $requestBody 
     */
    public function __construct(string $projectId, \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody $requestBody)
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
        return str_replace(array('{project_id}'), array($this->project_id), '/v2/project/{project_id}/server/{server_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody) {
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
     * @throws \Limestone\SDK\Exception\AssociateProjectServerBadRequestException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Result
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\AssociateProjectServerBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\AssociateProjectServerForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\AssociateProjectServerUnprocessableEntityException();
        }
    }
}