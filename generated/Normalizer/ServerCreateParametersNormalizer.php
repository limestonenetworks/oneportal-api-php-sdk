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
class ServerCreateParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\ServerCreateParameters';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\ServerCreateParameters';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\ServerCreateParameters();
        if (property_exists($data, 'core') && $data->{'core'} !== null) {
            $object->setCore($data->{'core'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'host_name') && $data->{'host_name'} !== null) {
            $object->setHostName($data->{'host_name'});
        }
        if (property_exists($data, 'image') && $data->{'image'} !== null) {
            $object->setImage($data->{'image'});
        }
        if (property_exists($data, 'ssh_keys') && $data->{'ssh_keys'} !== null) {
            $values = array();
            foreach ($data->{'ssh_keys'} as $value) {
                $values[] = $value;
            }
            $object->setSshKeys($values);
        }
        if (property_exists($data, 'user_data') && $data->{'user_data'} !== null) {
            $object->setUserData($data->{'user_data'});
        }
        if (property_exists($data, 'networks') && $data->{'networks'} !== null) {
            $values_1 = array();
            foreach ($data->{'networks'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNetworks($values_1);
        }
        if (property_exists($data, 'quantity') && $data->{'quantity'} !== null) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'tags') && $data->{'tags'} !== null) {
            $values_2 = array();
            foreach ($data->{'tags'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
        }
        if (property_exists($data, 'admin_password') && $data->{'admin_password'} !== null) {
            $object->setAdminPassword($data->{'admin_password'});
        }
        if (property_exists($data, 'custom_metadata') && $data->{'custom_metadata'} !== null) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'custom_metadata'} as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setCustomMetadata($values_3);
        }
        if (property_exists($data, 'facility') && $data->{'facility'} !== null) {
            $object->setFacility($data->{'facility'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCore()) {
            $data->{'core'} = $object->getCore();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getHostName()) {
            $data->{'host_name'} = $object->getHostName();
        }
        if (null !== $object->getImage()) {
            $data->{'image'} = $object->getImage();
        }
        if (null !== $object->getSshKeys()) {
            $values = array();
            foreach ($object->getSshKeys() as $value) {
                $values[] = $value;
            }
            $data->{'ssh_keys'} = $values;
        }
        if (null !== $object->getUserData()) {
            $data->{'user_data'} = $object->getUserData();
        }
        if (null !== $object->getNetworks()) {
            $values_1 = array();
            foreach ($object->getNetworks() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'networks'} = $values_1;
        }
        if (null !== $object->getQuantity()) {
            $data->{'quantity'} = $object->getQuantity();
        }
        if (null !== $object->getTags()) {
            $values_2 = array();
            foreach ($object->getTags() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'tags'} = $values_2;
        }
        if (null !== $object->getAdminPassword()) {
            $data->{'admin_password'} = $object->getAdminPassword();
        }
        if (null !== $object->getCustomMetadata()) {
            $values_3 = new \stdClass();
            foreach ($object->getCustomMetadata() as $key => $value_3) {
                $values_3->{$key} = $value_3;
            }
            $data->{'custom_metadata'} = $values_3;
        }
        if (null !== $object->getFacility()) {
            $data->{'facility'} = $object->getFacility();
        }
        return $data;
    }
}