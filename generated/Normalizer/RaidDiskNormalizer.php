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
class RaidDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\RaidDisk';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\RaidDisk';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\RaidDisk();
        if (property_exists($data, 'device') && $data->{'device'} !== null) {
            $object->setDevice($data->{'device'});
        }
        if (property_exists($data, 'raid') && $data->{'raid'} !== null) {
            $object->setRaid($this->denormalizer->denormalize($data->{'raid'}, 'Limestone\\SDK\\Model\\RaidDiskraid', 'json', $context));
        }
        if (property_exists($data, 'format') && $data->{'format'} !== null) {
            $object->setFormat($data->{'format'});
        }
        if (property_exists($data, 'format_options') && $data->{'format_options'} !== null) {
            $object->setFormatOptions($data->{'format_options'});
        }
        if (property_exists($data, 'config_drive') && $data->{'config_drive'} !== null) {
            $object->setConfigDrive($data->{'config_drive'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getDevice()) {
            $data->{'device'} = $object->getDevice();
        }
        if (null !== $object->getRaid()) {
            $data->{'raid'} = $this->normalizer->normalize($object->getRaid(), 'json', $context);
        }
        if (null !== $object->getFormat()) {
            $data->{'format'} = $object->getFormat();
        }
        if (null !== $object->getFormatOptions()) {
            $data->{'format_options'} = $object->getFormatOptions();
        }
        if (null !== $object->getConfigDrive()) {
            $data->{'config_drive'} = $object->getConfigDrive();
        }
        return $data;
    }
}