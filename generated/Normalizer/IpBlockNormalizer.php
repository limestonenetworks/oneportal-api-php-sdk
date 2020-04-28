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
class IpBlockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\IpBlock';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\IpBlock';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\IpBlock();
        if (property_exists($data, 'block') && $data->{'block'} !== null) {
            $object->setBlock($data->{'block'});
        }
        if (property_exists($data, 'network') && $data->{'network'} !== null) {
            $object->setNetwork($data->{'network'});
        }
        if (property_exists($data, 'cidr') && $data->{'cidr'} !== null) {
            $object->setCidr($data->{'cidr'});
        }
        if (property_exists($data, 'netmask') && $data->{'netmask'} !== null) {
            $object->setNetmask($data->{'netmask'});
        }
        if (property_exists($data, 'device') && $data->{'device'} !== null) {
            $object->setDevice($data->{'device'});
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'network_type') && $data->{'network_type'} !== null) {
            $object->setNetworkType($data->{'network_type'});
        }
        if (property_exists($data, 'assignment_type') && $data->{'assignment_type'} !== null) {
            $object->setAssignmentType($data->{'assignment_type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBlock()) {
            $data->{'block'} = $object->getBlock();
        }
        if (null !== $object->getNetwork()) {
            $data->{'network'} = $object->getNetwork();
        }
        if (null !== $object->getCidr()) {
            $data->{'cidr'} = $object->getCidr();
        }
        if (null !== $object->getNetmask()) {
            $data->{'netmask'} = $object->getNetmask();
        }
        if (null !== $object->getDevice()) {
            $data->{'device'} = $object->getDevice();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getNetworkType()) {
            $data->{'network_type'} = $object->getNetworkType();
        }
        if (null !== $object->getAssignmentType()) {
            $data->{'assignment_type'} = $object->getAssignmentType();
        }
        return $data;
    }
}