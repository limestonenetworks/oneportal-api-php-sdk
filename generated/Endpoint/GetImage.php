<?php

namespace Limestone\SDK\Endpoint;

class GetImage extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $image_name;
    /**
     * Get an image by name
     *
     * @param string $imageName Name of image to return
     */
    public function __construct(string $imageName)
    {
        $this->image_name = $imageName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{image_name}'), array($this->image_name), '/v2/image/{image_name}');
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
     * @throws \Limestone\SDK\Exception\GetImageForbiddenException
     * @throws \Limestone\SDK\Exception\GetImageNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Image
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Image', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetImageForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetImageNotFoundException();
        }
    }
}