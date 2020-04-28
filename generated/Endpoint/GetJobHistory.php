<?php

namespace Limestone\SDK\Endpoint;

class GetJobHistory extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Get a job history
     *
     * @param array $queryParameters {
     *     @var string $object_id ID of the object
     *     @var string $object_type The type of the object
     *     @var string $start The start time to look back. Defaults to 1 month.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v2/job/history';
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
        $optionsResolver->setDefined(array('object_id', 'object_type', 'start'));
        $optionsResolver->setRequired(array('object_id', 'object_type'));
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('object_id', array('string'));
        $optionsResolver->setAllowedTypes('object_type', array('string'));
        $optionsResolver->setAllowedTypes('start', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\GetJobHistoryUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetJobHistoryForbiddenException
     * @throws \Limestone\SDK\Exception\GetJobHistoryNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job[]', 'json');
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\GetJobHistoryUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetJobHistoryForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetJobHistoryNotFoundException();
        }
    }
}