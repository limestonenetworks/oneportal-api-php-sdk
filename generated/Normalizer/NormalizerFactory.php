<?php

namespace Limestone\SDK\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new InvoiceNormalizer();
        $normalizers[] = new ThresholdNormalizer();
        $normalizers[] = new EventLogNormalizer();
        $normalizers[] = new InstanceNormalizer();
        $normalizers[] = new IpBlockNormalizer();
        $normalizers[] = new CoreNormalizer();
        $normalizers[] = new NetInterfaceNormalizer();
        $normalizers[] = new FacilityNormalizer();
        $normalizers[] = new MetadataNormalizer();
        $normalizers[] = new JobNormalizer();
        $normalizers[] = new JobStatusNormalizer();
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
        $normalizers[] = new ServerReloadParametersNormalizer();
        $normalizers[] = new ServerReloadParametersWithPartitionsNormalizer();
        $normalizers[] = new ServerReloadParametersWithOSDiskNormalizer();
        $normalizers[] = new ResultNormalizer();
        $normalizers[] = new V2InstanceInstanceIdMetadataPostBodyNormalizer();
        $normalizers[] = new V2InstanceInstanceIdMetadataKeyPutBodyNormalizer();
        $normalizers[] = new V2InstanceInstanceIdTagPostBodyNormalizer();
        $normalizers[] = new V2ProjectPostBodyNormalizer();
        $normalizers[] = new V2ProjectProjectIdServerServerIdPostBodyNormalizer();
        $normalizers[] = new V2ProjectProjectIdSubnetDeleteBodyNormalizer();
        $normalizers[] = new V2SshkeyGetResponse200Normalizer();
        $normalizers[] = new V2SshkeyPostBodyNormalizer();
        return $normalizers;
    }
}