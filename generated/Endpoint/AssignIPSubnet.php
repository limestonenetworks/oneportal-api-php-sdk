<?php

namespace Limestone\SDK\Endpoint;

class AssignIPSubnet extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    protected $subnet;
    /**
     * Assign an IP subnet to an instance
     *
     * @param string $instanceId ID of instance to use
     * @param string $subnet IP subnet to assign
     */
    public function __construct(string $instanceId, string $subnet)
    {
        $this->instance_id = $instanceId;
        $this->subnet = $subnet;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}', '{subnet}'), array($this->instance_id, $this->subnet), '/v2/instance/{instance_id}/subnet');
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
     * @throws \Limestone\SDK\Exception\AssignIPSubnetBadRequestException
     * @throws \Limestone\SDK\Exception\AssignIPSubnetForbiddenException
     * @throws \Limestone\SDK\Exception\AssignIPSubnetUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\AssignIPSubnetBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\AssignIPSubnetForbiddenException();
        }
        if (422 === $status) {
            throw new \Limestone\SDK\Exception\AssignIPSubnetUnprocessableEntityException();
        }
    }
}