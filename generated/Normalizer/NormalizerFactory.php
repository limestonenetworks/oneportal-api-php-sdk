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
        $normalizers[] = new JobStatusNormalizer();
        $normalizers[] = new CoreNormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ImageNormalizer();
        $normalizers[] = new ServerNormalizer();
        $normalizers[] = new BasePartitionNormalizer();
        $normalizers[] = new RaidPartitionNormalizer();
        $normalizers[] = new DiskPartitionNormalizer();
        $normalizers[] = new FacilityStockNormalizer();
        $normalizers[] = new ProjectQuotasNormalizer();
        $normalizers[] = new ServerCreateParametersNormalizer();
        $normalizers[] = new ServerCreateParametersWithPartitionsNormalizer();
        $normalizers[] = new ServerCreateParametersWithOSDiskNormalizer();
        $normalizers[] = new ResultNormalizer();
        $normalizers[] = new V2ProjectPostBodyNormalizer();
        $normalizers[] = new V2ProjectProjectIdServerServerIdPostBodyNormalizer();
        return $normalizers;
    }
}