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
class ServerReloadParametersWithOSDiskNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\ServerReloadParametersWithOSDisk';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\ServerReloadParametersWithOSDisk';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\ServerReloadParametersWithOSDisk();
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
        if (property_exists($data, 'admin_password') && $data->{'admin_password'} !== null) {
            $object->setAdminPassword($data->{'admin_password'});
        }
        if (property_exists($data, 'project_id') && $data->{'project_id'} !== null) {
            $object->setProjectId($data->{'project_id'});
        }
        if (property_exists($data, 'modified') && $data->{'modified'} !== null) {
            $values_1 = array();
            foreach ($data->{'modified'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setModified($values_1);
        }
        if (property_exists($data, 'os_disk') && $data->{'os_disk'} !== null) {
            $object->setOsDisk($data->{'os_disk'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
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
        if (null !== $object->getAdminPassword()) {
            $data->{'admin_password'} = $object->getAdminPassword();
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        if (null !== $object->getModified()) {
            $values_1 = array();
            foreach ($object->getModified() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'modified'} = $values_1;
        }
        if (null !== $object->getOsDisk()) {
            $data->{'os_disk'} = $object->getOsDisk();
        }
        return $data;
    }
}