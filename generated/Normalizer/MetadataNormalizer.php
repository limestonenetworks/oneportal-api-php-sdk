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
class MetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Metadata';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Metadata';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Metadata();
        if (property_exists($data, 'key') && $data->{'key'} !== null) {
            $object->setKey($data->{'key'});
        }
        if (property_exists($data, 'value') && $data->{'value'} !== null) {
            $object->setValue($data->{'value'});
        }
        if (property_exists($data, 'mutable') && $data->{'mutable'} !== null) {
            $object->setMutable($data->{'mutable'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getKey()) {
            $data->{'key'} = $object->getKey();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        if (null !== $object->getMutable()) {
            $data->{'mutable'} = $object->getMutable();
        }
        return $data;
    }
}