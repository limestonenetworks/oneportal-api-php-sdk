<?php

namespace Limestone\SDK\Endpoint;

class DeleteInstance extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $instance_id;
    /**
     * Delete an instance. This will cancel the instance
     *
     * @param string $instanceId ID of instance
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     */
    public function __construct(string $instanceId, array $queryParameters = array())
    {
        $this->instance_id = $instanceId;
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{instance_id}'), array($this->instance_id), '/v2/instance/{instance_id}');
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
     * @throws \Limestone\SDK\Exception\DeleteInstanceInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteInstanceUnauthorizedException
     * @throws \Limestone\SDK\Exception\DeleteInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteInstanceNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (500 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteInstanceInternalServerErrorException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\DeleteInstanceUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeleteInstanceForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\DeleteInstanceNotFoundException();
        }
    }
}