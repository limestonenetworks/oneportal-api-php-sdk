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
class PartitionDiskpartitionsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\PartitionDiskpartitionsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\PartitionDiskpartitionsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\PartitionDiskpartitionsItem();
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'format') && $data->{'format'} !== null) {
            $object->setFormat($data->{'format'});
        }
        if (property_exists($data, 'format_options') && $data->{'format_options'} !== null) {
            $object->setFormatOptions($data->{'format_options'});
        }
        if (property_exists($data, 'size') && $data->{'size'} !== null) {
            $object->setSize($data->{'size'});
        }
        if (property_exists($data, 'flags') && $data->{'flags'} !== null) {
            $values = array();
            foreach ($data->{'flags'} as $value) {
                $values[] = $value;
            }
            $object->setFlags($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getFormat()) {
            $data->{'format'} = $object->getFormat();
        }
        if (null !== $object->getFormatOptions()) {
            $data->{'format_options'} = $object->getFormatOptions();
        }
        if (null !== $object->getSize()) {
            $data->{'size'} = $object->getSize();
        }
        if (null !== $object->getFlags()) {
            $values = array();
            foreach ($object->getFlags() as $value) {
                $values[] = $value;
            }
            $data->{'flags'} = $values;
        }
        return $data;
    }
}