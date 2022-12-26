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
class FeaturesUuidPatchResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FeaturesUuidPatchResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\FeaturesUuidPatchResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchResponse422Errors();
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
        if (\array_key_exists('mautic_config_name', $data) && $data['mautic_config_name'] !== null) {
            $values_2 = array();
            foreach ($data['mautic_config_name'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMauticConfigName($values_2);
            unset($data['mautic_config_name']);
        }
        elseif (\array_key_exists('mautic_config_name', $data) && $data['mautic_config_name'] === null) {
            $object->setMauticConfigName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $values_3 = array();
            foreach ($data['description'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setDescription($values_3);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
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
        if ($object->isInitialized('mauticConfigName') && null !== $object->getMauticConfigName()) {
            $values_2 = array();
            foreach ($object->getMauticConfigName() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['mautic_config_name'] = $values_2;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $values_3 = array();
            foreach ($object->getDescription() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['description'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }
        return $data;
    }
}