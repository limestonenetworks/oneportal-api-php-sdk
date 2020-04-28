<?php

namespace Limestone\SDK\Endpoint;

class DeallocateIPSubnet extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $project_id;
    protected $subnet;
    /**
     * Release an IP subnet from a project
     *
     * @param string $projectId Project ID that the prefix is allocated to
     * @param string $subnet IP subnet
     * @param \Limestone\SDK\Model\V2ProjectProjectIdSubnetDeleteBody $requestBody 
     */
    public function __construct(string $projectId, string $subnet, \Limestone\SDK\Model\V2ProjectProjectIdSubnetDeleteBody $requestBody)
    {
        $this->project_id = $projectId;
        $this->subnet = $subnet;
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{project_id}', '{subnet}'), array($this->project_id, $this->subnet), '/v2/project/{project_id}/subnet');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2ProjectProjectIdSubnetDeleteBody) {
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
     * @throws \Limestone\SDK\Exception\DeallocateIPSubnetBadRequestException
     * @throws \Limestone\SDK\Exception\DeallocateIPSubnetForbiddenException
     * @throws \Limestone\SDK\Exception\DeallocateIPSubnetUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Result
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeallocateIPSubnetBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeallocateIPSubnetForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\DeallocateIPSubnetUnprocessableEntityException();
        }
    }
}