<?php

namespace Limestone\SDK\Endpoint;

class GetJob extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $job_id;
    /**
     * Get a job by ID
     *
     * @param string $jobId ID of job to return
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
        return str_replace(array('{job_id}'), array($this->job_id), '/v2/job/{job_id}');
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
     * @throws \Limestone\SDK\Exception\GetJobUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetJobForbiddenException
     * @throws \Limestone\SDK\Exception\GetJobNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\Job', 'json');
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\GetJobUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetJobForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetJobNotFoundException();
        }
    }
}