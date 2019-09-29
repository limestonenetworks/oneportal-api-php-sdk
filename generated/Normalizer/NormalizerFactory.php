<?php

namespace Limestone\SDK\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new FacilityNormalizer();
        $normalizers[] = new MetadataNormalizer();
        $normalizers[] = new InstanceNormalizer();
        $normalizers[] = new JobNormalizer();
        $normalizers[] = new JobStatusNormalizer();
        $normalizers[] = new CoreNormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new SSHKeyNormalizer();
        $normalizers[] = new ServerNormalizer();
        $normalizers[] = new PartitionDiskNormalizer();
        $normalizers[] = new PartitionDiskpartitionsItemNormalizer();
        $normalizers[] = new RaidDiskNormalizer();
        $normalizers[] = new RaidDiskraidNormalizer();
        $normalizers[] = new ServerCreateValidationErrorResponseNormalizer();
        $normalizers[] = new ServerCreateValidationErrorNormalizer();
        $normalizers[] = new FacilityStockNormalizer();
        $normalizers[] = new ProjectQuotasNormalizer();
        $normalizers[] = new ServerCreateParametersNormalizer();
        $normalizers[] = new ServerCreateParametersWithPartitionsNormalizer();
        $normalizers[] = new ServerCreateParametersWithOSDiskNormalizer();
        $normalizers[] = new ResultNormalizer();
        $normalizers[] = new V2ProjectPostBodyNormalizer();
        $normalizers[] = new V2ProjectProjectIdServerServerIdPostBodyNormalizer();
        $normalizers[] = new V2SshkeyGetResponse200Normalizer();
        $normalizers[] = new V2SshkeyPostBodyNormalizer();
        return $normalizers;
    }
}