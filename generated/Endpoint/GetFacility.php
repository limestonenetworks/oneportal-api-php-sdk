<?php

namespace Limestone\SDK\Endpoint;

class GetFacility extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $facility_name;
    /**
     * Get a facility by name
     *
     * @param string $facilityName Name of facility to return
     */
    public function __construct(string $facilityName)
    {
        $this->facility_name = $facilityName;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{facility_name}'), array($this->facility_name), '/v2/facility/{facility_name}');
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
     * @throws \Limestone\SDK\Exception\GetFacilityForbiddenException
     * @throws \Limestone\SDK\Exception\GetFacilityNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Facility
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Facility', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetFacilityForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetFacilityNotFoundException();
        }
    }
}