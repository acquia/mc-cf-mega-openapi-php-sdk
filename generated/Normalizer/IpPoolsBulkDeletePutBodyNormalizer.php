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
class IpPoolsBulkDeletePutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPoolsBulkDeletePutBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPoolsBulkDeletePutBody';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsBulkDeletePutBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ip_pool_uuids', $data) && $data['ip_pool_uuids'] !== null) {
            $values = array();
            foreach ($data['ip_pool_uuids'] as $value) {
                $values[] = $value;
            }
            $object->setIpPoolUuids($values);
            unset($data['ip_pool_uuids']);
        }
        elseif (\array_key_exists('ip_pool_uuids', $data) && $data['ip_pool_uuids'] === null) {
            $object->setIpPoolUuids(null);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('ipPoolUuids') && null !== $object->getIpPoolUuids()) {
            $values = array();
            foreach ($object->getIpPoolUuids() as $value) {
                $values[] = $value;
            }
            $data['ip_pool_uuids'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}