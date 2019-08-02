<?php

namespace Limestone\SDK;

use Limestone\SDK\Model\ServerCreateParameters;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetCoreListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Core[]|\Psr\Http\Message\ResponseInterface
     */
    public function getCoreList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetCoreList(), $fetch);
    }
    /**
     * Get a core by name
     *
     * @param string $coreName Name of core to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetCoreForbiddenException
     * @throws \Limestone\SDK\Exception\GetCoreNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Core|\Psr\Http\Message\ResponseInterface
     */
    public function getCore(string $coreName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetCore($coreName), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetFacilityListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Facility[]|\Psr\Http\Message\ResponseInterface
     */
    public function getFacilityList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetFacilityList(), $fetch);
    }
    /**
     * Get a facility by name
     *
     * @param string $facilityName Name of facility to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetFacilityForbiddenException
     * @throws \Limestone\SDK\Exception\GetFacilityNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Facility|\Psr\Http\Message\ResponseInterface
     */
    public function getFacility(string $facilityName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetFacility($facilityName), $fetch);
    }
    /**
     * Get a facility's stock by name
     *
     * @param string $facilityName Name of facility to return stock for
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetFacilityStockForbiddenException
     * @throws \Limestone\SDK\Exception\GetFacilityStockNotFoundException
     *
     * @return null|\Limestone\SDK\Model\FacilityStock|\Psr\Http\Message\ResponseInterface
     */
    public function getFacilityStock(string $facilityName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetFacilityStock($facilityName), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetImageListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Image[]|\Psr\Http\Message\ResponseInterface
     */
    public function getImageList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetImageList(), $fetch);
    }
    /**
     * Get an image by name
     *
     * @param string $imageName Name of image to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetImageForbiddenException
     * @throws \Limestone\SDK\Exception\GetImageNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Image|\Psr\Http\Message\ResponseInterface
     */
    public function getImage(string $imageName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetImage($imageName), $fetch);
    }
    /**
     * Get a job status by ID
     *
     * @param string $jobId ID of job status to return
     * @param array $queryParameters {
     *     @var bool $show_all Whether to return the latest status only or all status updates
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetJobStatusUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetJobStatusForbiddenException
     * @throws \Limestone\SDK\Exception\GetJobStatusNotFoundException
     *
     * @return null|\Limestone\SDK\Model\JobStatus[]|\Psr\Http\Message\ResponseInterface
     */
    public function getJobStatus(string $jobId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetJobStatus($jobId, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProjectList(), $fetch);
    }
    /**
     * Create a project based on the given options
     *
     * @param \Limestone\SDK\Model\V2ProjectPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\StoreProjectBadRequestException
     * @throws \Limestone\SDK\Exception\StoreProjectForbiddenException
     * @throws \Limestone\SDK\Exception\StoreProjectUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function storeProject(\Limestone\SDK\Model\V2ProjectPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\StoreProject($requestBody), $fetch);
    }
    /**
     * Delete a project by ID. This will recursively remove all servers assigned to the project.
     *
     * @param string $projectId ID of project to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteProjectInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteProjectForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteProjectNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteProject($projectId), $fetch);
    }
    /**
     * Get a project by ID
     *
     * @param string $projectId ID of project to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function getProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProject($projectId), $fetch);
    }
    /**
     * Get a project's quotas by ID
     *
     * @param string $projectId ID of project to return quotas for
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectQuotasForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectQuotasNotFoundException
     *
     * @return null|\Limestone\SDK\Model\ProjectQuotas|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectQuotas(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProjectQuotas($projectId), $fetch);
    }
    /**
     * Get a project's servers
     *
     * @param string $projectId ID of project to return servers for
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectServersForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectServersNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectServers(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProjectServers($projectId), $fetch);
    }
    /**
     * Create a server based on the given options
     *
     * @param string $projectId ID of project to use
     * @param mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\StoreProjectServerBadRequestException
     * @throws \Limestone\SDK\Exception\StoreProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\StoreProjectServerUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function storeProjectServer(string $projectId, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\StoreProjectServer($projectId, $requestBody), $fetch);
    }
    /**
     * Delete a project's server by ID. This will disocciate the server from the project
     *
     * @param string $projectId ID of project
     * @param string $serverId ID of the server to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteProjectServerInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectServer(string $projectId, string $serverId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteProjectServer($projectId, $serverId), $fetch);
    }
    /**
     * Associate a server with a project
     *
     * @param string $projectId ID of project to use
     * @param \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\AssociateProjectServerBadRequestException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Result|\Psr\Http\Message\ResponseInterface
     */
    public function associateProjectServer(string $projectId, \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\AssociateProjectServer($projectId, $requestBody), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('http://localhost/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Limestone\SDK\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}