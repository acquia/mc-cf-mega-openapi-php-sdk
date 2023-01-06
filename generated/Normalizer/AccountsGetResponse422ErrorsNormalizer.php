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
class AccountsGetResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AccountsGetResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AccountsGetResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsGetResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('per_page', $data) && $data['per_page'] !== null) {
            $values = array();
            foreach ($data['per_page'] as $value) {
                $values[] = $value;
            }
            $object->setPerPage($values);
            unset($data['per_page']);
        }
        elseif (\array_key_exists('per_page', $data) && $data['per_page'] === null) {
            $object->setPerPage(null);
        }
        if (\array_key_exists('sort_column', $data) && $data['sort_column'] !== null) {
            $values_1 = array();
            foreach ($data['sort_column'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSortColumn($values_1);
            unset($data['sort_column']);
        }
        elseif (\array_key_exists('sort_column', $data) && $data['sort_column'] === null) {
            $object->setSortColumn(null);
        }
        if (\array_key_exists('sort_direction', $data) && $data['sort_direction'] !== null) {
            $values_2 = array();
            foreach ($data['sort_direction'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSortDirection($values_2);
            unset($data['sort_direction']);
        }
        elseif (\array_key_exists('sort_direction', $data) && $data['sort_direction'] === null) {
            $object->setSortDirection(null);
        }
        if (\array_key_exists('trashed', $data) && $data['trashed'] !== null) {
            $values_3 = array();
            foreach ($data['trashed'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTrashed($values_3);
            unset($data['trashed']);
        }
        elseif (\array_key_exists('trashed', $data) && $data['trashed'] === null) {
            $object->setTrashed(null);
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
        if ($object->isInitialized('perPage') && null !== $object->getPerPage()) {
            $values = array();
            foreach ($object->getPerPage() as $value) {
                $values[] = $value;
            }
            $data['per_page'] = $values;
        }
        if ($object->isInitialized('sortColumn') && null !== $object->getSortColumn()) {
            $values_1 = array();
            foreach ($object->getSortColumn() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['sort_column'] = $values_1;
        }
        if ($object->isInitialized('sortDirection') && null !== $object->getSortDirection()) {
            $values_2 = array();
            foreach ($object->getSortDirection() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['sort_direction'] = $values_2;
        }
        if ($object->isInitialized('trashed') && null !== $object->getTrashed()) {
            $values_3 = array();
            foreach ($object->getTrashed() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['trashed'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }
        return $data;
    }
}