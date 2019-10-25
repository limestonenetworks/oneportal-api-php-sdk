<?php

namespace Limestone\SDK\Endpoint;

class AddIPAddress extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Create a server based on the given options
     *
     * @param string $instanceId ID of project to use
     * @param mixed $requestBody 
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     */
    public function __construct(string $instanceId, $requestBody, array $queryParameters = array())
    {
        $this->instance_id = $instanceId;
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{project_id}/ipaddress');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if (isset($this->body)) {
            return array(array('Content-Type' => array('application/x-www-form-urlencoded')), http_build_query($serializer->normalize($this->body, 'json')));
        }
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
     * @throws \Limestone\SDK\Exception\AddIPAddressBadRequestException
     * @throws \Limestone\SDK\Exception\AddIPAddressForbiddenException
     * @throws \Limestone\SDK\Exception\AddIPAddressUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\JobStatus
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\JobStatus', 'json');
        }
        if (400 === $status) {
            throw new \Limestone\SDK\Exception\AddIPAddressBadRequestException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\AddIPAddressForbiddenException();
        }
        if (422 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\AddIPAddressUnprocessableEntityException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\ServerCreateValidationErrorResponse', 'json'));
        }
    }
}
