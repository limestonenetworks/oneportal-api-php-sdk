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
class RaidDiskraidNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\RaidDiskraid';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\RaidDiskraid';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\RaidDiskraid();
        if (property_exists($data, 'level') && $data->{'level'} !== null) {
            $object->setLevel($data->{'level'});
        }
        if (property_exists($data, 'components') && $data->{'components'} !== null) {
            $values = array();
            foreach ($data->{'components'} as $value) {
                $values[] = $value;
            }
            $object->setComponents($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLevel()) {
            $data->{'level'} = $object->getLevel();
        }
        if (null !== $object->getComponents()) {
            $values = array();
            foreach ($object->getComponents() as $value) {
                $values[] = $value;
            }
            $data->{'components'} = $values;
        }
        return $data;
    }
}