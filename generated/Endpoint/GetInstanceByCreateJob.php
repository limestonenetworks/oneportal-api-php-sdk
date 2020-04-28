<?php

namespace Limestone\SDK\Endpoint;

class GetInstanceByCreateJob extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $job_id;
    /**
     * Get an instance by create job ID
     *
     * @param string $jobId ID of instance to return
     */
    public function __construct(string $jobId)
    {
        $this->job_id = $jobId;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{job_id}'), array($this->job_id), '/v2/instance/find_by_create_job/{job_id}');
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
     * @throws \Limestone\SDK\Exception\GetInstanceByCreateJobForbiddenException
     * @throws \Limestone\SDK\Exception\GetInstanceByCreateJobNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Instance
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Instance', 'json');
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceByCreateJobForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetInstanceByCreateJobNotFoundException();
        }
    }
}