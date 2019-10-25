<?php

namespace Limestone\SDK\Endpoint;

class GetInstanceList extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Get all instances
     *
     * @param array $queryParameters {
     *     @var bool $deleted Include deleted instances
     *     @var string $project_id ID of project to filter by
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
        return '/v2/instance';
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
        $optionsResolver->setDefined(array('deleted', 'project_id'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('deleted', array('bool'));
        $optionsResolver->setAllowedTypes('project_id', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\GetInstanceListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Instance[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Instance[]', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceListForbiddenException();
        }
    }
}