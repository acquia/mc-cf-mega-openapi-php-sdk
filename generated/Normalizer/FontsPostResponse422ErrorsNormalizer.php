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
class FontsPostResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FontsPostResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FontsPostResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostResponse422Errors();
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
        if (\array_key_exists('css_url', $data) && $data['css_url'] !== null) {
            $values_1 = array();
            foreach ($data['css_url'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCssUrl($values_1);
            unset($data['css_url']);
        }
        elseif (\array_key_exists('css_url', $data) && $data['css_url'] === null) {
            $object->setCssUrl(null);
        }
        if (\array_key_exists('stack', $data) && $data['stack'] !== null) {
            $values_2 = array();
            foreach ($data['stack'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setStack($values_2);
            unset($data['stack']);
        }
        elseif (\array_key_exists('stack', $data) && $data['stack'] === null) {
            $object->setStack(null);
        }
        if (\array_key_exists('cutsomer_uuid', $data) && $data['cutsomer_uuid'] !== null) {
            $values_3 = array();
            foreach ($data['cutsomer_uuid'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCutsomerUuid($values_3);
            unset($data['cutsomer_uuid']);
        }
        elseif (\array_key_exists('cutsomer_uuid', $data) && $data['cutsomer_uuid'] === null) {
            $object->setCutsomerUuid(null);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
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
        if ($object->isInitialized('cssUrl') && null !== $object->getCssUrl()) {
            $values_1 = array();
            foreach ($object->getCssUrl() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['css_url'] = $values_1;
        }
        if ($object->isInitialized('stack') && null !== $object->getStack()) {
            $values_2 = array();
            foreach ($object->getStack() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['stack'] = $values_2;
        }
        if ($object->isInitialized('cutsomerUuid') && null !== $object->getCutsomerUuid()) {
            $values_3 = array();
            foreach ($object->getCutsomerUuid() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['cutsomer_uuid'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }
        return $data;
    }
}