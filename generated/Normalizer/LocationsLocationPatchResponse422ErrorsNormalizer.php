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
class LocationsLocationPatchResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\LocationsLocationPatchResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\LocationsLocationPatchResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\LocationsLocationPatchResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $values = array();
            foreach ($data['name'] as $value) {
                $values[] = $value;
            }
            $object->setName($values);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('ips', $data) && $data['ips'] !== null) {
            $values_1 = array();
            foreach ($data['ips'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIps($values_1);
            unset($data['ips']);
        }
        elseif (\array_key_exists('ips', $data) && $data['ips'] === null) {
            $object->setIps(null);
        }
        if (\array_key_exists('cname', $data) && $data['cname'] !== null) {
            $values_2 = array();
            foreach ($data['cname'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCname($values_2);
            unset($data['cname']);
        }
        elseif (\array_key_exists('cname', $data) && $data['cname'] === null) {
            $object->setCname(null);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $values = array();
            foreach ($object->getName() as $value) {
                $values[] = $value;
            }
            $data['name'] = $values;
        }
        if ($object->isInitialized('ips') && null !== $object->getIps()) {
            $values_1 = array();
            foreach ($object->getIps() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ips'] = $values_1;
        }
        if ($object->isInitialized('cname') && null !== $object->getCname()) {
            $values_2 = array();
            foreach ($object->getCname() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['cname'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}