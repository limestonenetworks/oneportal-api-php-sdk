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
class ProjectQuotasNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\ProjectQuotas';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\ProjectQuotas';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Limestone\SDK\Model\ProjectQuotas();
        if (property_exists($data, 'max_ips')) {
            $object->setMaxIps($data->{'max_ips'});
        }
        if (property_exists($data, 'max_servers')) {
            $object->setMaxServers($data->{'max_servers'});
        }
        if (property_exists($data, 'used_servers')) {
            $object->setUsedServers($data->{'used_servers'});
        }
        if (property_exists($data, 'used_ips')) {
            $object->setUsedIps($data->{'used_ips'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMaxIps()) {
            $data->{'max_ips'} = $object->getMaxIps();
        }
        if (null !== $object->getMaxServers()) {
            $data->{'max_servers'} = $object->getMaxServers();
        }
        if (null !== $object->getUsedServers()) {
            $data->{'used_servers'} = $object->getUsedServers();
        }
        if (null !== $object->getUsedIps()) {
            $data->{'used_ips'} = $object->getUsedIps();
        }
        return $data;
    }
}