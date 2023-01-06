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
class AccountsAccountPatchResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AccountsAccountPatchResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AccountsAccountPatchResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsAccountPatchResponse422Errors();
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
        if (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] !== null) {
            $values_1 = array();
            foreach ($data['monthly_email_limit'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMonthlyEmailLimit($values_1);
            unset($data['monthly_email_limit']);
        }
        elseif (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] === null) {
            $object->setMonthlyEmailLimit(null);
        }
        if (\array_key_exists('contact_limit', $data) && $data['contact_limit'] !== null) {
            $values_2 = array();
            foreach ($data['contact_limit'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setContactLimit($values_2);
            unset($data['contact_limit']);
        }
        elseif (\array_key_exists('contact_limit', $data) && $data['contact_limit'] === null) {
            $object->setContactLimit(null);
        }
        if (\array_key_exists('customer_uuid', $data) && $data['customer_uuid'] !== null) {
            $values_3 = array();
            foreach ($data['customer_uuid'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCustomerUuid($values_3);
            unset($data['customer_uuid']);
        }
        elseif (\array_key_exists('customer_uuid', $data) && $data['customer_uuid'] === null) {
            $object->setCustomerUuid(null);
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
        if ($object->isInitialized('monthlyEmailLimit') && null !== $object->getMonthlyEmailLimit()) {
            $values_1 = array();
            foreach ($object->getMonthlyEmailLimit() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['monthly_email_limit'] = $values_1;
        }
        if ($object->isInitialized('contactLimit') && null !== $object->getContactLimit()) {
            $values_2 = array();
            foreach ($object->getContactLimit() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['contact_limit'] = $values_2;
        }
        if ($object->isInitialized('customerUuid') && null !== $object->getCustomerUuid()) {
            $values_3 = array();
            foreach ($object->getCustomerUuid() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['customer_uuid'] = $values_3;
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }
        return $data;
    }
}