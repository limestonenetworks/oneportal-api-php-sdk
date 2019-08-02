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
class FacilityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Facility';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Facility';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Facility();
        if (property_exists($data, 'facility_name') && $data->{'facility_name'} !== null) {
            $object->setFacilityName($data->{'facility_name'});
        }
        if (property_exists($data, 'facility_title') && $data->{'facility_title'} !== null) {
            $object->setFacilityTitle($data->{'facility_title'});
        }
        if (property_exists($data, 'facility_description') && $data->{'facility_description'} !== null) {
            $object->setFacilityDescription($data->{'facility_description'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getFacilityName()) {
            $data->{'facility_name'} = $object->getFacilityName();
        }
        if (null !== $object->getFacilityTitle()) {
            $data->{'facility_title'} = $object->getFacilityTitle();
        }
        if (null !== $object->getFacilityDescription()) {
            $data->{'facility_description'} = $object->getFacilityDescription();
        }
        return $data;
    }
}