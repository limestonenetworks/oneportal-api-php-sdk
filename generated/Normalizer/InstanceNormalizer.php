<?php

namespace Limestone\SDK\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Instance';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Instance';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Instance();
        if (property_exists($data, 'uuid') && $data->{'uuid'} !== null) {
            $object->setUuid($data->{'uuid'});
        }
        if (property_exists($data, 'short_uuid') && $data->{'short_uuid'} !== null) {
            $object->setShortUuid($data->{'short_uuid'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'hostname') && $data->{'hostname'} !== null) {
            $object->setHostname($data->{'hostname'});
        }
        if (property_exists($data, 'server_id') && $data->{'server_id'} !== null) {
            $object->setServerId($data->{'server_id'});
        }
        if (property_exists($data, 'project_id') && $data->{'project_id'} !== null) {
            $object->setProjectId($data->{'project_id'});
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'management_ip') && $data->{'management_ip'} !== null) {
            $object->setManagementIp($data->{'management_ip'});
        }
        if (property_exists($data, 'provision_date') && $data->{'provision_date'} !== null) {
            $object->setProvisionDate($data->{'provision_date'});
        }
        if (property_exists($data, 'create_job') && $data->{'create_job'} !== null) {
            $object->setCreateJob($data->{'create_job'});
        }
        if (property_exists($data, 'item_type') && $data->{'item_type'} !== null) {
            $object->setItemType($data->{'item_type'});
        }
        if (property_exists($data, 'core') && $data->{'core'} !== null) {
            $object->setCore($this->denormalizer->denormalize($data->{'core'}, 'Limestone\\SDK\\Model\\Core', 'json', $context));
        }
        if (property_exists($data, 'facility') && $data->{'facility'} !== null) {
            $object->setFacility($this->denormalizer->denormalize($data->{'facility'}, 'Limestone\\SDK\\Model\\Facility', 'json', $context));
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $values = array();
            foreach ($data->{'metadata'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Limestone\\SDK\\Model\\Metadata', 'json', $context);
            }
            $object->setMetadata($values);
        }
        if (property_exists($data, 'tags') && $data->{'tags'} !== null) {
            $values_1 = array();
            foreach ($data->{'tags'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
        }
        if (property_exists($data, 'ip_subnets') && $data->{'ip_subnets'} !== null) {
            $values_2 = array();
            foreach ($data->{'ip_subnets'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Limestone\\SDK\\Model\\IpBlock', 'json', $context);
            }
            $object->setIpSubnets($values_2);
        }
        if (property_exists($data, 'latest_provision') && $data->{'latest_provision'} !== null) {
            $values_3 = array();
            foreach ($data->{'latest_provision'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Limestone\\SDK\\Model\\EventLog', 'json', $context);
            }
            $object->setLatestProvision($values_3);
        }
        if (property_exists($data, 'net_interfaces') && $data->{'net_interfaces'} !== null) {
            $values_4 = array();
            foreach ($data->{'net_interfaces'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Limestone\\SDK\\Model\\NetInterface', 'json', $context);
            }
            $object->setNetInterfaces($values_4);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getUuid()) {
            $data->{'uuid'} = $object->getUuid();
        }
        if (null !== $object->getShortUuid()) {
            $data->{'short_uuid'} = $object->getShortUuid();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getHostname()) {
            $data->{'hostname'} = $object->getHostname();
        }
        if (null !== $object->getServerId()) {
            $data->{'server_id'} = $object->getServerId();
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getManagementIp()) {
            $data->{'management_ip'} = $object->getManagementIp();
        }
        if (null !== $object->getProvisionDate()) {
            $data->{'provision_date'} = $object->getProvisionDate();
        }
        if (null !== $object->getCreateJob()) {
            $data->{'create_job'} = $object->getCreateJob();
        }
        if (null !== $object->getItemType()) {
            $data->{'item_type'} = $object->getItemType();
        }
        if (null !== $object->getCore()) {
            $data->{'core'} = $this->normalizer->normalize($object->getCore(), 'json', $context);
        }
        if (null !== $object->getFacility()) {
            $data->{'facility'} = $this->normalizer->normalize($object->getFacility(), 'json', $context);
        }
        if (null !== $object->getMetadata()) {
            $values = array();
            foreach ($object->getMetadata() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'metadata'} = $values;
        }
        if (null !== $object->getTags()) {
            $values_1 = array();
            foreach ($object->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'tags'} = $values_1;
        }
        if (null !== $object->getIpSubnets()) {
            $values_2 = array();
            foreach ($object->getIpSubnets() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'ip_subnets'} = $values_2;
        }
        if (null !== $object->getLatestProvision()) {
            $values_3 = array();
            foreach ($object->getLatestProvision() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'latest_provision'} = $values_3;
        }
        if (null !== $object->getNetInterfaces()) {
            $values_4 = array();
            foreach ($object->getNetInterfaces() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'net_interfaces'} = $values_4;
        }
        return $data;
    }
}