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
class PlansUuidPatchResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PlansUuidPatchResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PlansUuidPatchResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\PlansUuidPatchResponse422Errors();
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
        if (\array_key_exists('alias', $data) && $data['alias'] !== null) {
            $values_1 = array();
            foreach ($data['alias'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAlias($values_1);
            unset($data['alias']);
        }
        elseif (\array_key_exists('alias', $data) && $data['alias'] === null) {
            $object->setAlias(null);
        }
        if (\array_key_exists('template_instance_uuid', $data) && $data['template_instance_uuid'] !== null) {
            $values_2 = array();
            foreach ($data['template_instance_uuid'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTemplateInstanceUuid($values_2);
            unset($data['template_instance_uuid']);
        }
        elseif (\array_key_exists('template_instance_uuid', $data) && $data['template_instance_uuid'] === null) {
            $object->setTemplateInstanceUuid(null);
        }
        if (\array_key_exists('account_limit', $data) && $data['account_limit'] !== null) {
            $values_3 = array();
            foreach ($data['account_limit'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAccountLimit($values_3);
            unset($data['account_limit']);
        }
        elseif (\array_key_exists('account_limit', $data) && $data['account_limit'] === null) {
            $object->setAccountLimit(null);
        }
        if (\array_key_exists('instance_limit', $data) && $data['instance_limit'] !== null) {
            $values_4 = array();
            foreach ($data['instance_limit'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setInstanceLimit($values_4);
            unset($data['instance_limit']);
        }
        elseif (\array_key_exists('instance_limit', $data) && $data['instance_limit'] === null) {
            $object->setInstanceLimit(null);
        }
        if (\array_key_exists('users_limit', $data) && $data['users_limit'] !== null) {
            $values_5 = array();
            foreach ($data['users_limit'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setUsersLimit($values_5);
            unset($data['users_limit']);
        }
        elseif (\array_key_exists('users_limit', $data) && $data['users_limit'] === null) {
            $object->setUsersLimit(null);
        }
        if (\array_key_exists('contact_limit', $data) && $data['contact_limit'] !== null) {
            $values_6 = array();
            foreach ($data['contact_limit'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setContactLimit($values_6);
            unset($data['contact_limit']);
        }
        elseif (\array_key_exists('contact_limit', $data) && $data['contact_limit'] === null) {
            $object->setContactLimit(null);
        }
        if (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] !== null) {
            $values_7 = array();
            foreach ($data['monthly_email_limit'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setMonthlyEmailLimit($values_7);
            unset($data['monthly_email_limit']);
        }
        elseif (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] === null) {
            $object->setMonthlyEmailLimit(null);
        }
        if (\array_key_exists('trial_length', $data) && $data['trial_length'] !== null) {
            $values_8 = array();
            foreach ($data['trial_length'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setTrialLength($values_8);
            unset($data['trial_length']);
        }
        elseif (\array_key_exists('trial_length', $data) && $data['trial_length'] === null) {
            $object->setTrialLength(null);
        }
        foreach ($data as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_9;
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
        if ($object->isInitialized('alias') && null !== $object->getAlias()) {
            $values_1 = array();
            foreach ($object->getAlias() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['alias'] = $values_1;
        }
        if ($object->isInitialized('templateInstanceUuid') && null !== $object->getTemplateInstanceUuid()) {
            $values_2 = array();
            foreach ($object->getTemplateInstanceUuid() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['template_instance_uuid'] = $values_2;
        }
        if ($object->isInitialized('accountLimit') && null !== $object->getAccountLimit()) {
            $values_3 = array();
            foreach ($object->getAccountLimit() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['account_limit'] = $values_3;
        }
        if ($object->isInitialized('instanceLimit') && null !== $object->getInstanceLimit()) {
            $values_4 = array();
            foreach ($object->getInstanceLimit() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['instance_limit'] = $values_4;
        }
        if ($object->isInitialized('usersLimit') && null !== $object->getUsersLimit()) {
            $values_5 = array();
            foreach ($object->getUsersLimit() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['users_limit'] = $values_5;
        }
        if ($object->isInitialized('contactLimit') && null !== $object->getContactLimit()) {
            $values_6 = array();
            foreach ($object->getContactLimit() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['contact_limit'] = $values_6;
        }
        if ($object->isInitialized('monthlyEmailLimit') && null !== $object->getMonthlyEmailLimit()) {
            $values_7 = array();
            foreach ($object->getMonthlyEmailLimit() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['monthly_email_limit'] = $values_7;
        }
        if ($object->isInitialized('trialLength') && null !== $object->getTrialLength()) {
            $values_8 = array();
            foreach ($object->getTrialLength() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['trial_length'] = $values_8;
        }
        foreach ($object as $key => $value_9) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_9;
            }
        }
        return $data;
    }
}