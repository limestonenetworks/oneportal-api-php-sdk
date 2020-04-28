<?php

namespace Limestone\SDK;

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
     * Get all instances
     *
     * @param array $queryParameters {
     *     @var bool $deleted Include deleted instances
     *     @var string $project_id ID of project to filter by
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetInstanceListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Instance[]|\Psr\Http\Message\ResponseInterface
     */
    public function getInstanceList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetInstanceList($queryParameters), $fetch);
    }
    /**
     * Create a server based on the given options
     *
     * @param mixed $requestBody 
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\StoreInstanceBadRequestException
     * @throws \Limestone\SDK\Exception\StoreInstanceUnauthorizedException
     * @throws \Limestone\SDK\Exception\StoreInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\StoreInstanceUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function storeInstance($requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\StoreInstance($requestBody, $queryParameters), $fetch);
    }
    /**
     * Delete an instance. This will cancel the instance
     *
     * @param string $instanceId ID of instance
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteInstanceInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteInstanceUnauthorizedException
     * @throws \Limestone\SDK\Exception\DeleteInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteInstanceNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function deleteInstance(string $instanceId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteInstance($instanceId, $queryParameters), $fetch);
    }
    /**
     * Get an instance by ID
     *
     * @param string $instanceId ID of instance to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\GetInstanceNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Instance|\Psr\Http\Message\ResponseInterface
     */
    public function getInstance(string $instanceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetInstance($instanceId), $fetch);
    }
    /**
     * Reload a server based on the given options
     *
     * @param string $instanceId ID of instance
     * @param mixed $requestBody 
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\ReloadInstanceBadRequestException
     * @throws \Limestone\SDK\Exception\ReloadInstanceUnauthorizedException
     * @throws \Limestone\SDK\Exception\ReloadInstanceForbiddenException
     * @throws \Limestone\SDK\Exception\ReloadInstanceUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function reloadInstance(string $instanceId, $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\ReloadInstance($instanceId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Remove an IP subnet from an instance
     *
     * @param string $instanceId ID of instance to use
     * @param string $subnet IP subnet to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeassignIPSubnetBadRequestException
     * @throws \Limestone\SDK\Exception\DeassignIPSubnetForbiddenException
     * @throws \Limestone\SDK\Exception\DeassignIPSubnetUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function deassignIPSubnet(string $instanceId, string $subnet, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeassignIPSubnet($instanceId, $subnet), $fetch);
    }
    /**
     * Get an instance's IP subnets
     *
     * @param string $instanceId ID of instance to query
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetInstanceIPSubnetsForbiddenException
     * @throws \Limestone\SDK\Exception\GetInstanceIPSubnetsNotFoundException
     *
     * @return null|\Limestone\SDK\Model\IpBlock[]|\Psr\Http\Message\ResponseInterface
     */
    public function getInstanceIPSubnets(string $instanceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetInstanceIPSubnets($instanceId), $fetch);
    }
    /**
     * Assign an IP subnet to an instance
     *
     * @param string $instanceId ID of instance to use
     * @param string $subnet IP subnet to assign
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\AssignIPSubnetBadRequestException
     * @throws \Limestone\SDK\Exception\AssignIPSubnetForbiddenException
     * @throws \Limestone\SDK\Exception\AssignIPSubnetUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function assignIPSubnet(string $instanceId, string $subnet, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\AssignIPSubnet($instanceId, $subnet), $fetch);
    }
    /**
     * Get all metadata for an instance
     *
     * @param string $instanceId ID of the instance
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetMetadataForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Metadata[]|\Psr\Http\Message\ResponseInterface
     */
    public function getMetadata(string $instanceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetMetadata($instanceId), $fetch);
    }
    /**
     * Create metadata for the instance
     *
     * @param string $instanceId ID of the instance
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdMetadataPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\CreateMetadataBadRequestException
     * @throws \Limestone\SDK\Exception\CreateMetadataForbiddenException
     * @throws \Limestone\SDK\Exception\CreateMetadataUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Metadata|\Psr\Http\Message\ResponseInterface
     */
    public function createMetadata(string $instanceId, \Limestone\SDK\Model\V2InstanceInstanceIdMetadataPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\CreateMetadata($instanceId, $requestBody), $fetch);
    }
    /**
     * Delete metadata from an instance
     *
     * @param string $instanceId ID of the instance
     * @param string $key The key to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteMetadataBadRequestException
     * @throws \Limestone\SDK\Exception\DeleteMetadataForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Result|\Psr\Http\Message\ResponseInterface
     */
    public function deleteMetadata(string $instanceId, string $key, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteMetadata($instanceId, $key), $fetch);
    }
    /**
     * Update metadata for the instance
     *
     * @param string $instanceId ID of the instance
     * @param string $key The key to update
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdMetadataKeyPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\UpdateMetadataBadRequestException
     * @throws \Limestone\SDK\Exception\UpdateMetadataForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Metadata|\Psr\Http\Message\ResponseInterface
     */
    public function updateMetadata(string $instanceId, string $key, \Limestone\SDK\Model\V2InstanceInstanceIdMetadataKeyPutBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\UpdateMetadata($instanceId, $key, $requestBody), $fetch);
    }
    /**
     * Get all tags for an instance
     *
     * @param string $instanceId ID of the instance
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetTagsForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTags(string $instanceId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetTags($instanceId), $fetch);
    }
    /**
     * Create tag for the instance
     *
     * @param string $instanceId ID of the instance
     * @param \Limestone\SDK\Model\V2InstanceInstanceIdTagPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\CreateTagBadRequestException
     * @throws \Limestone\SDK\Exception\CreateTagForbiddenException
     * @throws \Limestone\SDK\Exception\CreateTagUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(string $instanceId, \Limestone\SDK\Model\V2InstanceInstanceIdTagPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\CreateTag($instanceId, $requestBody), $fetch);
    }
    /**
     * Delete tag from an instance
     *
     * @param string $instanceId ID of the instance
     * @param string $tag The tag to remove
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteTagBadRequestException
     * @throws \Limestone\SDK\Exception\DeleteTagForbiddenException
     *
     * @return null|\Limestone\SDK\Model\Result|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(string $instanceId, string $tag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteTag($instanceId, $tag), $fetch);
    }
    /**
     * Get an instance by create job ID
     *
     * @param string $jobId ID of instance to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetInstanceByCreateJobForbiddenException
     * @throws \Limestone\SDK\Exception\GetInstanceByCreateJobNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Instance|\Psr\Http\Message\ResponseInterface
     */
    public function getInstanceByCreateJob(string $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetInstanceByCreateJob($jobId), $fetch);
    }
    /**
     * Get a job by ID
     *
     * @param string $jobId ID of job to return
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetJobUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetJobForbiddenException
     * @throws \Limestone\SDK\Exception\GetJobNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function getJob(string $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetJob($jobId), $fetch);
    }
    /**
     * Get a job history
     *
     * @param array $queryParameters {
     *     @var string $object_id ID of the object
     *     @var string $object_type The type of the object
     *     @var string $start The start time to look back. Defaults to 1 month.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetJobHistoryUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetJobHistoryForbiddenException
     * @throws \Limestone\SDK\Exception\GetJobHistoryNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job[]|\Psr\Http\Message\ResponseInterface
     */
    public function getJobHistory(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetJobHistory($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectListUnauthorizedException
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
     * @throws \Limestone\SDK\Exception\StoreProjectUnauthorizedException
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
     * Delete a project by ID. All dependent resources must be deleted prior.
     *
     * @param string $projectId ID of project to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteProjectInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteProjectBadRequestException
     * @throws \Limestone\SDK\Exception\DeleteProjectUnauthorizedException
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
     * @throws \Limestone\SDK\Exception\GetProjectUnauthorizedException
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
     * @throws \Limestone\SDK\Exception\GetProjectQuotasUnauthorizedException
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
     * Get a project's instances
     *
     * @param string $projectId ID of project to return servers for
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectServersUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetProjectServersForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectServersNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Instance[]|\Psr\Http\Message\ResponseInterface
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
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\StoreProjectServerBadRequestException
     * @throws \Limestone\SDK\Exception\StoreProjectServerUnauthorizedException
     * @throws \Limestone\SDK\Exception\StoreProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\StoreProjectServerUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function storeProjectServer(string $projectId, $requestBody, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\StoreProjectServer($projectId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * Delete a project's server by ID. This will cancel the instance
     *
     * @param string $projectId ID of project
     * @param string $serverId ID of the server to delete
     * @param array $queryParameters {
     *     @var bool $wait Whether to wait for the result of the call
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteProjectServerInternalServerErrorException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerUnauthorizedException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteProjectServerNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectServer(string $projectId, string $serverId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteProjectServer($projectId, $serverId, $queryParameters), $fetch);
    }
    /**
     * Associate a server with a project
     *
     * @param string $projectId ID of project to use
     * @param \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\AssociateProjectServerBadRequestException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerUnauthorizedException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerForbiddenException
     * @throws \Limestone\SDK\Exception\AssociateProjectServerUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Result|\Psr\Http\Message\ResponseInterface
     */
    public function associateProjectServer(string $projectId, \Limestone\SDK\Model\V2ProjectProjectIdServerServerIdPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\AssociateProjectServer($projectId, $requestBody), $fetch);
    }
    /**
     * Release an IP subnet from a project
     *
     * @param string $projectId Project ID that the prefix is allocated to
     * @param string $subnet IP subnet
     * @param \Limestone\SDK\Model\V2ProjectProjectIdSubnetDeleteBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeallocateIPSubnetBadRequestException
     * @throws \Limestone\SDK\Exception\DeallocateIPSubnetForbiddenException
     * @throws \Limestone\SDK\Exception\DeallocateIPSubnetUnprocessableEntityException
     *
     * @return null|\Limestone\SDK\Model\Result|\Psr\Http\Message\ResponseInterface
     */
    public function deallocateIPSubnet(string $projectId, string $subnet, \Limestone\SDK\Model\V2ProjectProjectIdSubnetDeleteBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeallocateIPSubnet($projectId, $subnet, $requestBody), $fetch);
    }
    /**
     * Get an project's IP subnets
     *
     * @param string $projectId ID of the project to query
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectIPSubnetsForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectIPSubnetsNotFoundException
     *
     * @return null|\Limestone\SDK\Model\IpBlock[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectIPSubnets(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProjectIPSubnets($projectId), $fetch);
    }
    /**
     * Get a project's billing threshold
     *
     * @param string $projectId ID of project to return threshold for
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectBillingThresholdUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetProjectBillingThresholdForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectBillingThresholdNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Threshold|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectBillingThreshold(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProjectBillingThreshold($projectId), $fetch);
    }
    /**
     * Get a project's billing history
     *
     * @param string $projectId ID of project to return billing history for
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetProjectBillingUnauthorizedException
     * @throws \Limestone\SDK\Exception\GetProjectBillingForbiddenException
     * @throws \Limestone\SDK\Exception\GetProjectBillingNotFoundException
     *
     * @return null|\Limestone\SDK\Model\Invoice[]|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectBilling(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetProjectBilling($projectId), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetSSHKeyListForbiddenException
     *
     * @return null|\Limestone\SDK\Model\V2SshkeyGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getSSHKeyList(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetSSHKeyList(), $fetch);
    }
    /**
     * Create an ssh public key based on the given options
     *
     * @param \Limestone\SDK\Model\V2SshkeyPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\StoreSSHKeyBadRequestException
     * @throws \Limestone\SDK\Exception\StoreSSHKeyForbiddenException
     * @throws \Limestone\SDK\Exception\StoreSSHKeyUnprocessableEntityException
     * @throws \Limestone\SDK\Exception\StoreSSHKeyInternalServerErrorException
     *
     * @return null|\Limestone\SDK\Model\SSHKey|\Psr\Http\Message\ResponseInterface
     */
    public function storeSSHKey(\Limestone\SDK\Model\V2SshkeyPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\StoreSSHKey($requestBody), $fetch);
    }
    /**
     * Delete an ssh key
     *
     * @param string $name Name of ssh key to delete
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\DeleteSSHKeyForbiddenException
     * @throws \Limestone\SDK\Exception\DeleteSSHKeyUnprocessableEntityException
     * @throws \Limestone\SDK\Exception\DeleteSSHKeyInternalServerErrorException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSSHKey(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\DeleteSSHKey($name), $fetch);
    }
    /**
     * Get an ssh key
     *
     * @param string $name Name of ssh key to show
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\GetSSHKeyForbiddenException
     *
     * @return null|\Limestone\SDK\Model\SSHKey|\Psr\Http\Message\ResponseInterface
     */
    public function getSSHKey(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\GetSSHKey($name), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Limestone\SDK\Exception\CanCreateProjectForbiddenException
     * @throws \Limestone\SDK\Exception\CanCreateProjectUnauthorizedException
     *
     * @return null|\Limestone\SDK\Model\Result|\Psr\Http\Message\ResponseInterface
     */
    public function canCreateProject(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Limestone\SDK\Endpoint\CanCreateProject(), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://api.dallas-idc.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\Limestone\SDK\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
