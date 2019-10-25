<?php

namespace Limestone\SDK\Endpoint;

class StoreInstance extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Create a server based on the given options
     *
     * @param mixed $requestBody
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     */
    public function __construct($requestBody, array $queryParameters = array())
    {
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
        return '/v2/instance';
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
     * @throws \Limestone\SDK\Exception\StoreInstanceBadRequestException
     * @throws \Limestone\SDK\Exception\StoreInstanceUnauthorizedException
     * @throws \Limestone\SDK\Exception\StoreInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\StoreInstanceUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (400 === $status) {
            throw new \Limestone\SDK\Exception\StoreInstanceBadRequestException();
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\StoreInstanceUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\StoreInstanceForbiddenException();
        }
        if (422 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\StoreInstanceUnprocessableEntityException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\ServerCreateValidationErrorResponse', 'json'));
        }
    }
}
