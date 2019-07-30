<?php

namespace Limestone\SDK\Endpoint;

class GetCore extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $core_name;
    /**
     * Get a core by name
     *
     * @param string $coreName Name of core to return
     */
    public function __construct(string $coreName)
    {
        $this->core_name = $coreName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{core_name}'), array($this->core_name), '/v2/core/{core_name}');
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
     * @throws \Limestone\SDK\Exception\GetCoreForbiddenException
     * @throws \Limestone\SDK\Exception\GetCoreNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Core
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Core', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetCoreForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetCoreNotFoundException();
        }
    }
}