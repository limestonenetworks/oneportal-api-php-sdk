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
class CoreNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Core';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Core';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Core();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'rate') && $data->{'rate'} !== null) {
            $object->setRate($data->{'rate'});
        }
        if (property_exists($data, 'interval') && $data->{'interval'} !== null) {
            $object->setInterval($data->{'interval'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $values = array();
            foreach ($data->{'metadata'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Limestone\\SDK\\Model\\Metadata', 'json', $context);
            }
            $object->setMetadata($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getRate()) {
            $data->{'rate'} = $object->getRate();
        }
        if (null !== $object->getInterval()) {
            $data->{'interval'} = $object->getInterval();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getMetadata()) {
            $values = array();
            foreach ($object->getMetadata() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'metadata'} = $values;
        }
        return $data;
    }
}