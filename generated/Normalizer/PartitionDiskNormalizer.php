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
class PartitionDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\PartitionDisk';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\PartitionDisk';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\PartitionDisk();
        if (property_exists($data, 'device') && $data->{'device'} !== null) {
            $object->setDevice($data->{'device'});
        }
        if (property_exists($data, 'install_bootloader') && $data->{'install_bootloader'} !== null) {
            $object->setInstallBootloader($data->{'install_bootloader'});
        }
        if (property_exists($data, 'label') && $data->{'label'} !== null) {
            $object->setLabel($data->{'label'});
        }
        if (property_exists($data, 'partitions') && $data->{'partitions'} !== null) {
            $values = array();
            foreach ($data->{'partitions'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Limestone\\SDK\\Model\\PartitionDiskpartitionsItem', 'json', $context);
            }
            $object->setPartitions($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDevice()) {
            $data->{'device'} = $object->getDevice();
        }
        if (null !== $object->getInstallBootloader()) {
            $data->{'install_bootloader'} = $object->getInstallBootloader();
        }
        if (null !== $object->getLabel()) {
            $data->{'label'} = $object->getLabel();
        }
        if (null !== $object->getPartitions()) {
            $values = array();
            foreach ($object->getPartitions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'partitions'} = $values;
        }
        return $data;
    }
}