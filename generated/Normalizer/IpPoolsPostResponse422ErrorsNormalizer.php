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
class IpPoolsPostResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPoolsPostResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPoolsPostResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsPostResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('alias', $data) && $data['alias'] !== null) {
            $values = array();
            foreach ($data['alias'] as $value) {
                $values[] = $value;
            }
            $object->setAlias($values);
            unset($data['alias']);
        }
        elseif (\array_key_exists('alias', $data) && $data['alias'] === null) {
            $object->setAlias(null);
        }
        if (\array_key_exists('', $data) && $data[''] !== null) {
            $values_1 = array();
            foreach ($data[''] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->set($values_1);
            unset($data['']);
        }
        elseif (\array_key_exists('', $data) && $data[''] === null) {
            $object->set(null);
        }
        if (\array_key_exists('region', $data) && $data['region'] !== null) {
            $values_2 = array();
            foreach ($data['region'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRegion($values_2);
            unset($data['region']);
        }
        elseif (\array_key_exists('region', $data) && $data['region'] === null) {
            $object->setRegion(null);
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
        if ($object->isInitialized('alias') && null !== $object->getAlias()) {
            $values = array();
            foreach ($object->getAlias() as $value) {
                $values[] = $value;
            }
            $data['alias'] = $values;
        }
        if ($object->isInitialized('') && null !== $object->get()) {
            $values_1 = array();
            foreach ($object->get() as $value_1) {
                $values_1[] = $value_1;
            }
            $data[''] = $values_1;
        }
        if ($object->isInitialized('region') && null !== $object->getRegion()) {
            $values_2 = array();
            foreach ($object->getRegion() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['region'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}