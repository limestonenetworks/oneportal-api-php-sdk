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
class NetInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\NetInterface';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\NetInterface';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\NetInterface();
        if (property_exists($data, 'interface_number') && $data->{'interface_number'} !== null) {
            $object->setInterfaceNumber($data->{'interface_number'});
        }
        if (property_exists($data, 'macaddress') && $data->{'macaddress'} !== null) {
            $object->setMacaddress($data->{'macaddress'});
        }
        if (property_exists($data, 'interface_type') && $data->{'interface_type'} !== null) {
            $object->setInterfaceType($data->{'interface_type'});
        }
        if (property_exists($data, 'ip_blocks') && $data->{'ip_blocks'} !== null) {
            $values = array();
            foreach ($data->{'ip_blocks'} as $value) {
                $values[] = $value;
            }
            $object->setIpBlocks($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getInterfaceNumber()) {
            $data->{'interface_number'} = $object->getInterfaceNumber();
        }
        if (null !== $object->getMacaddress()) {
            $data->{'macaddress'} = $object->getMacaddress();
        }
        if (null !== $object->getInterfaceType()) {
            $data->{'interface_type'} = $object->getInterfaceType();
        }
        if (null !== $object->getIpBlocks()) {
            $values = array();
            foreach ($object->getIpBlocks() as $value) {
                $values[] = $value;
            }
            $data->{'ip_blocks'} = $values;
        }
        return $data;
    }
}