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
        if (property_exists($data, 'core') && $data->{'core'} !== null) {
            $object->setCore($data->{'core'});
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
        if (property_exists($data, 'net_interfaces') && $data->{'net_interfaces'} !== null) {
            $values_3 = array();
            foreach ($data->{'net_interfaces'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Limestone\\SDK\\Model\\NetInterface', 'json', $context);
            }
            $object->setNetInterfaces($values_3);
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
        if (null !== $object->getCore()) {
            $data->{'core'} = $object->getCore();
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
        if (null !== $object->getNetInterfaces()) {
            $values_3 = array();
            foreach ($object->getNetInterfaces() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'net_interfaces'} = $values_3;
        }
        return $data;
    }
}