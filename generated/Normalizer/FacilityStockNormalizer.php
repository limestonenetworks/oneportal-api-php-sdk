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
class FacilityStockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\FacilityStock';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\FacilityStock';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\FacilityStock();
        if (property_exists($data, 'available') && $data->{'available'} !== null) {
            $values = array();
            foreach ($data->{'available'} as $value) {
                $values[] = $value;
            }
            $object->setAvailable($values);
        }
        if (property_exists($data, 'unavailable') && $data->{'unavailable'} !== null) {
            $values_1 = array();
            foreach ($data->{'unavailable'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUnavailable($values_1);
        }
        if (property_exists($data, 'low') && $data->{'low'} !== null) {
            $values_2 = array();
            foreach ($data->{'low'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLow($values_2);
        }
        if (property_exists($data, 'facility') && $data->{'facility'} !== null) {
            $object->setFacility($data->{'facility'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAvailable()) {
            $values = array();
            foreach ($object->getAvailable() as $value) {
                $values[] = $value;
            }
            $data->{'available'} = $values;
        }
        if (null !== $object->getUnavailable()) {
            $values_1 = array();
            foreach ($object->getUnavailable() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'unavailable'} = $values_1;
        }
        if (null !== $object->getLow()) {
            $values_2 = array();
            foreach ($object->getLow() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'low'} = $values_2;
        }
        if (null !== $object->getFacility()) {
            $data->{'facility'} = $object->getFacility();
        }
        return $data;
    }
}