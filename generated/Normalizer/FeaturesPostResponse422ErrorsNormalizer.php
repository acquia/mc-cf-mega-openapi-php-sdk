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
class FeaturesPostResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FeaturesPostResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FeaturesPostResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesPostResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('flagname', $data) && $data['flagname'] !== null) {
            $values = array();
            foreach ($data['flagname'] as $value) {
                $values[] = $value;
            }
            $object->setFlagname($values);
            unset($data['flagname']);
        }
        elseif (\array_key_exists('flagname', $data) && $data['flagname'] === null) {
            $object->setFlagname(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $values_1 = array();
            foreach ($data['name'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setName($values_1);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $values_2 = array();
            foreach ($data['description'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setDescription($values_2);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('mautic_config_name', $data) && $data['mautic_config_name'] !== null) {
            $values_3 = array();
            foreach ($data['mautic_config_name'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setMauticConfigName($values_3);
            unset($data['mautic_config_name']);
        }
        elseif (\array_key_exists('mautic_config_name', $data) && $data['mautic_config_name'] === null) {
            $object->setMauticConfigName(null);
        }
        if (\array_key_exists('is_mautic_feature_flag', $data) && $data['is_mautic_feature_flag'] !== null) {
            $values_4 = array();
            foreach ($data['is_mautic_feature_flag'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setIsMauticFeatureFlag($values_4);
            unset($data['is_mautic_feature_flag']);
        }
        elseif (\array_key_exists('is_mautic_feature_flag', $data) && $data['is_mautic_feature_flag'] === null) {
            $object->setIsMauticFeatureFlag(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if ($object->isInitialized('flagname') && null !== $object->getFlagname()) {
            $values = array();
            foreach ($object->getFlagname() as $value) {
                $values[] = $value;
            }
            $data['flagname'] = $values;
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $values_1 = array();
            foreach ($object->getName() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['name'] = $values_1;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $values_2 = array();
            foreach ($object->getDescription() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['description'] = $values_2;
        }
        if ($object->isInitialized('mauticConfigName') && null !== $object->getMauticConfigName()) {
            $values_3 = array();
            foreach ($object->getMauticConfigName() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['mautic_config_name'] = $values_3;
        }
        if ($object->isInitialized('isMauticFeatureFlag') && null !== $object->getIsMauticFeatureFlag()) {
            $values_4 = array();
            foreach ($object->getIsMauticFeatureFlag() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['is_mautic_feature_flag'] = $values_4;
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_5;
            }
        }
        return $data;
    }
}