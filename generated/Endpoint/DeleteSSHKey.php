<?php

namespace Limestone\SDK\Endpoint;

class DeleteSSHKey extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $name;
    /**
     * Delete an ssh key
     *
     * @param string $name Name of ssh key to delete
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{name}'), array($this->name), '/v2/sshkey/{name}');
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
     * @throws \Limestone\SDK\Exception\DeleteSSHKeyForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteSSHKeyUnprocessableEntityException
     * @throws \Limestone\SDK\Exception\DeleteSSHKeyInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (202 === $status) {
            return null;
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\DeleteSSHKeyForbiddenException();
        }
        if (422 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteSSHKeyUnprocessableEntityException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (500 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\DeleteSSHKeyInternalServerErrorException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
    }
}