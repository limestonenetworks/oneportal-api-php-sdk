<?php

namespace Limestone\SDK\Endpoint;

class GetJobStatus extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $job_id;
    /**
     * Get a job status by ID
     *
     * @param string $jobId ID of job status to return
     * @param array $queryParameters {
     *     @var bool $show_all Whether to return the latest status only or all status updates
     * }
     */
    public function __construct(string $jobId, array $queryParameters = array())
    {
        $this->job_id = $jobId;
        $this->queryParameters = $queryParameters;
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
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('show_all'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('show_all', array('bool'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Limestone\SDK\Exception\GetJobStatusUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetJobStatusForbiddenException
     * @throws \Limestone\SDK\Exception\GetJobStatusNotFoundException
     *
     * @return null|\Limestone\SDK\Model\JobStatus[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && 'application/json' === $contentType) {
            return $serializer->deserialize($body, 'Limestone\\SDK\\Model\\JobStatus[]', 'json');
        }
        if (401 === $status) {
            throw new \Limestone\SDK\Exception\GetJobStatusUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Limestone\SDK\Exception\GetJobStatusForbiddenException();
        }
        if (404 === $status) {
            throw new \Limestone\SDK\Exception\GetJobStatusNotFoundException();
        }
    }
}