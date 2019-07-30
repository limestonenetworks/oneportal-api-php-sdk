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
class ServerCreateParametersWithPartitionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\ServerCreateParametersWithPartitions';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\ServerCreateParametersWithPartitions';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Limestone\SDK\Model\ServerCreateParametersWithPartitions();
        if (property_exists($data, 'core')) {
            $object->setCore($data->{'core'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'image')) {
            $object->setImage($data->{'image'});
        }
        if (property_exists($data, 'ssh_keys')) {
            $values = array();
            foreach ($data->{'ssh_keys'} as $value) {
                $values[] = $value;
            }
            $object->setSshKeys($values);
        }
        if (property_exists($data, 'user_data')) {
            $object->setUserData($data->{'user_data'});
        }
        if (property_exists($data, 'networks')) {
            $values_1 = array();
            foreach ($data->{'networks'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNetworks($values_1);
        }
        if (property_exists($data, 'quantity')) {
            $object->setQuantity($data->{'quantity'});
        }
        if (property_exists($data, 'tags')) {
            $values_2 = array();
            foreach ($data->{'tags'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTags($values_2);
        }
        if (property_exists($data, 'admin_password')) {
            $object->setAdminPassword($data->{'admin_password'});
        }
        if (property_exists($data, 'custom_metadata')) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'custom_metadata'} as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setCustomMetadata($values_3);
        }
        if (property_exists($data, 'facility')) {
            $object->setFacility($data->{'facility'});
        }
        if (property_exists($data, 'partitions')) {
            $object->setPartitions($data->{'partitions'});
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
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
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
        if (null !== $object->getPartitions()) {
            $data->{'partitions'} = $object->getPartitions();
        }
        return $data;
    }
}