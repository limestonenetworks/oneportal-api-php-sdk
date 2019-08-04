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
class ServerCreateValidationErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\ServerCreateValidationError';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\ServerCreateValidationError';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\ServerCreateValidationError();
        if (property_exists($data, 'property') && $data->{'property'} !== null) {
            $object->setProperty($data->{'property'});
        }
        if (property_exists($data, 'pointer') && $data->{'pointer'} !== null) {
            $object->setPointer($data->{'pointer'});
        }
        if (property_exists($data, 'message') && $data->{'message'} !== null) {
            $object->setMessage($data->{'message'});
        }
        if (property_exists($data, 'constraint') && $data->{'constraint'} !== null) {
            $object->setConstraint($data->{'constraint'});
        }
        if (property_exists($data, 'context') && $data->{'context'} !== null) {
            $object->setContext($data->{'context'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getProperty()) {
            $data->{'property'} = $object->getProperty();
        }
        if (null !== $object->getPointer()) {
            $data->{'pointer'} = $object->getPointer();
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $object->getMessage();
        }
        if (null !== $object->getConstraint()) {
            $data->{'constraint'} = $object->getConstraint();
        }
        if (null !== $object->getContext()) {
            $data->{'context'} = $object->getContext();
        }
        return $data;
    }
}