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
class IpAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\IpAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\IpAddress';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\IpAddress();
        if (property_exists($data, 'ip') && $data->{'ip'} !== null) {
            $object->setIp($data->{'ip'});
        }
        if (property_exists($data, 'cidr') && $data->{'cidr'} !== null) {
            $object->setCidr($data->{'cidr'});
        }
        if (property_exists($data, 'readable_ip') && $data->{'readable_ip'} !== null) {
            $object->setReadableIp($data->{'readable_ip'});
        }
        if (property_exists($data, 'network_type') && $data->{'network_type'} !== null) {
            $object->setNetworkType($data->{'network_type'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIp()) {
            $data->{'ip'} = $object->getIp();
        }
        if (null !== $object->getCidr()) {
            $data->{'cidr'} = $object->getCidr();
        }
        if (null !== $object->getReadableIp()) {
            $data->{'readable_ip'} = $object->getReadableIp();
        }
        if (null !== $object->getNetworkType()) {
            $data->{'network_type'} = $object->getNetworkType();
        }
        return $data;
    }
}