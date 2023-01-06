<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use MauticInc\MEGA\OpenAPI\Generated\Runtime\Normalizer\CheckArray;
use MauticInc\MEGA\OpenAPI\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SenderDomainsPostResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomainsPostResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomainsPostResponse422Errors';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sender_domain', $data) && $data['sender_domain'] !== null) {
            $values = array();
            foreach ($data['sender_domain'] as $value) {
                $values[] = $value;
            }
            $object->setSenderDomain($values);
            unset($data['sender_domain']);
        }
        elseif (\array_key_exists('sender_domain', $data) && $data['sender_domain'] === null) {
            $object->setSenderDomain(null);
        }
        if (\array_key_exists('bounce_domain', $data) && $data['bounce_domain'] !== null) {
            $values_1 = array();
            foreach ($data['bounce_domain'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setBounceDomain($values_1);
            unset($data['bounce_domain']);
        }
        elseif (\array_key_exists('bounce_domain', $data) && $data['bounce_domain'] === null) {
            $object->setBounceDomain(null);
        }
        if (\array_key_exists('tracking_domain', $data) && $data['tracking_domain'] !== null) {
            $values_2 = array();
            foreach ($data['tracking_domain'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTrackingDomain($values_2);
            unset($data['tracking_domain']);
        }
        elseif (\array_key_exists('tracking_domain', $data) && $data['tracking_domain'] === null) {
            $object->setTrackingDomain(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('senderDomain') && null !== $object->getSenderDomain()) {
            $values = array();
            foreach ($object->getSenderDomain() as $value) {
                $values[] = $value;
            }
            $data['sender_domain'] = $values;
        }
        if ($object->isInitialized('bounceDomain') && null !== $object->getBounceDomain()) {
            $values_1 = array();
            foreach ($object->getBounceDomain() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['bounce_domain'] = $values_1;
        }
        if ($object->isInitialized('trackingDomain') && null !== $object->getTrackingDomain()) {
            $values_2 = array();
            foreach ($object->getTrackingDomain() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['tracking_domain'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}