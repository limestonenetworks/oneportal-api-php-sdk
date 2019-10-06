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
class InstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Instance';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Instance';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Instance();
        if (property_exists($data, 'uuid') && $data->{'uuid'} !== null) {
            $object->setUuid($data->{'uuid'});
        }
        if (property_exists($data, 'short_uuid') && $data->{'short_uuid'} !== null) {
            $object->setShortUuid($data->{'short_uuid'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'hostname') && $data->{'hostname'} !== null) {
            $object->setHostname($data->{'hostname'});
        }
        if (property_exists($data, 'server_id') && $data->{'server_id'} !== null) {
            $object->setServerId($data->{'server_id'});
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
        if (null !== $object->getUuid()) {
            $data->{'uuid'} = $object->getUuid();
        }
        if (null !== $object->getShortUuid()) {
            $data->{'short_uuid'} = $object->getShortUuid();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getHostname()) {
            $data->{'hostname'} = $object->getHostname();
        }
        if (null !== $object->getServerId()) {
            $data->{'server_id'} = $object->getServerId();
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