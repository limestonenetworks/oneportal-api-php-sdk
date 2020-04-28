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
class ThresholdNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Limestone\\SDK\\Model\\Threshold';
    }
    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Limestone\\SDK\\Model\\Threshold';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Limestone\SDK\Model\Threshold();
        if (property_exists($data, 'threshold_dollars') && $data->{'threshold_dollars'} !== null) {
            $object->setThresholdDollars($data->{'threshold_dollars'});
        }
        if (property_exists($data, 'threshold_days') && $data->{'threshold_days'} !== null) {
            $object->setThresholdDays($data->{'threshold_days'});
        }
        if (property_exists($data, 'estimate_days') && $data->{'estimate_days'} !== null) {
            $object->setEstimateDays($data->{'estimate_days'});
        }
        if (property_exists($data, 'avg_usage') && $data->{'avg_usage'} !== null) {
            $object->setAvgUsage($data->{'avg_usage'});
        }
        if (property_exists($data, 'usage_days') && $data->{'usage_days'} !== null) {
            $object->setUsageDays($data->{'usage_days'});
        }
        if (property_exists($data, 'usage_dollars') && $data->{'usage_dollars'} !== null) {
            $object->setUsageDollars($data->{'usage_dollars'});
        }
        if (property_exists($data, 'last_billed') && $data->{'last_billed'} !== null) {
            $object->setLastBilled($data->{'last_billed'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getThresholdDollars()) {
            $data->{'threshold_dollars'} = $object->getThresholdDollars();
        }
        if (null !== $object->getThresholdDays()) {
            $data->{'threshold_days'} = $object->getThresholdDays();
        }
        if (null !== $object->getEstimateDays()) {
            $data->{'estimate_days'} = $object->getEstimateDays();
        }
        if (null !== $object->getAvgUsage()) {
            $data->{'avg_usage'} = $object->getAvgUsage();
        }
        if (null !== $object->getUsageDays()) {
            $data->{'usage_days'} = $object->getUsageDays();
        }
        if (null !== $object->getUsageDollars()) {
            $data->{'usage_dollars'} = $object->getUsageDollars();
        }
        if (null !== $object->getLastBilled()) {
            $data->{'last_billed'} = $object->getLastBilled();
        }
        return $data;
    }
}