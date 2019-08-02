<?php

namespace Limestone\SDK\Endpoint;

class StoreSSHKey extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Create an ssh public key based on the given options
     *
     * @param \Limestone\SDK\Model\V2SshkeyPostBody $requestBody 
     */
    public function __construct(\Limestone\SDK\Model\V2SshkeyPostBody $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v2/sshkey';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        if ($this->body instanceof \Limestone\SDK\Model\V2SshkeyPostBody) {
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
     * @throws \Limestone\SDK\Exception\StoreSSHKeyBadRequestException
     * @throws \Limestone\SDK\Exception\StoreSSHKeyForbiddenException
     * @throws \Limestone\SDK\Exception\StoreSSHKeyUnprocessableEntityException
     * @throws \Limestone\SDK\Exception\StoreSSHKeyInternalServerErrorException
     *
     * @return null|\Limestone\SDK\Model\SSHKey
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\SSHKey', 'json');
        }
        if (400 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\StoreSSHKeyBadRequestException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\StoreSSHKeyForbiddenException();
        }
        if (422 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\StoreSSHKeyUnprocessableEntityException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
        if (500 === $status && 'application/json' === $contentType) {
            throw new \Limestone\SDK\Exception\StoreSSHKeyInternalServerErrorException($serializer->deserialize($body, 'Limestone\\SDK\\Model\\Result', 'json'));
        }
    }
}