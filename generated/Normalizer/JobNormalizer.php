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
class JobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Job';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Job';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Job();
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt($data->{'created_at'});
        }
        if (property_exists($data, 'update_at') && $data->{'update_at'} !== null) {
            $object->setUpdateAt($data->{'update_at'});
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'job_identifier') && $data->{'job_identifier'} !== null) {
            $object->setJobIdentifier($data->{'job_identifier'});
        }
        if (property_exists($data, 'display_name') && $data->{'display_name'} !== null) {
            $object->setDisplayName($data->{'display_name'});
        }
        if (property_exists($data, 'metadata') && $data->{'metadata'} !== null) {
            $values = array();
            foreach ($data->{'metadata'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Limestone\\SDK\\Model\\Metadata', 'json', $context);
            }
            $object->setMetadata($values);
        }
        if (property_exists($data, 'statuses') && $data->{'statuses'} !== null) {
            $values_1 = array();
            foreach ($data->{'statuses'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Limestone\\SDK\\Model\\JobStatus', 'json', $context);
            }
            $object->setStatuses($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt();
        }
        if (null !== $object->getUpdateAt()) {
            $data->{'update_at'} = $object->getUpdateAt();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getJobIdentifier()) {
            $data->{'job_identifier'} = $object->getJobIdentifier();
        }
        if (null !== $object->getDisplayName()) {
            $data->{'display_name'} = $object->getDisplayName();
        }
        if (null !== $object->getMetadata()) {
            $values = array();
            foreach ($object->getMetadata() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'metadata'} = $values;
        }
        if (null !== $object->getStatuses()) {
            $values_1 = array();
            foreach ($object->getStatuses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'statuses'} = $values_1;
        }
        return $data;
    }
}