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
            throw new InvalidArgumentException();
        }
        $object = new \Limestone\SDK\Model\Core();
        if (property_exists($data, 'shortname')) {
            $object->setShortname($data->{'shortname'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'processors')) {
            $object->setProcessors($data->{'processors'});
        }
        if (property_exists($data, 'cores')) {
            $object->setCores($data->{'cores'});
        }
        if (property_exists($data, 'speed')) {
            $object->setSpeed($data->{'speed'});
        }
        if (property_exists($data, 'corename')) {
            $object->setCorename($data->{'corename'});
        }
        if (property_exists($data, 'startmonthly')) {
            $object->setStartmonthly($data->{'startmonthly'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getShortname()) {
            $data->{'shortname'} = $object->getShortname();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getProcessors()) {
            $data->{'processors'} = $object->getProcessors();
        }
        if (null !== $object->getCores()) {
            $data->{'cores'} = $object->getCores();
        }
        if (null !== $object->getSpeed()) {
            $data->{'speed'} = $object->getSpeed();
        }
        if (null !== $object->getCorename()) {
            $data->{'corename'} = $object->getCorename();
        }
        if (null !== $object->getStartmonthly()) {
            $data->{'startmonthly'} = $object->getStartmonthly();
        }
        return $data;
    }
}