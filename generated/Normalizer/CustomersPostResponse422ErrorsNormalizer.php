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
class CustomersPostResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersPostResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersPostResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostResponse422Errors();
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
        if (\array_key_exists('ip_pool_uuids', $data) && $data['ip_pool_uuids'] !== null) {
            $values_1 = array();
            foreach ($data['ip_pool_uuids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIpPoolUuids($values_1);
            unset($data['ip_pool_uuids']);
        }
        elseif (\array_key_exists('ip_pool_uuids', $data) && $data['ip_pool_uuids'] === null) {
            $object->setIpPoolUuids(null);
        }
        if (\array_key_exists('plan_uuid', $data) && $data['plan_uuid'] !== null) {
            $values_2 = array();
            foreach ($data['plan_uuid'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPlanUuid($values_2);
            unset($data['plan_uuid']);
        }
        elseif (\array_key_exists('plan_uuid', $data) && $data['plan_uuid'] === null) {
            $object->setPlanUuid(null);
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
        if (\array_key_exists('contact_limit', $data) && $data['contact_limit'] !== null) {
            $values_4 = array();
            foreach ($data['contact_limit'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setContactLimit($values_4);
            unset($data['contact_limit']);
        }
        elseif (\array_key_exists('contact_limit', $data) && $data['contact_limit'] === null) {
            $object->setContactLimit(null);
        }
        if (\array_key_exists('instance_limit', $data) && $data['instance_limit'] !== null) {
            $values_5 = array();
            foreach ($data['instance_limit'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setInstanceLimit($values_5);
            unset($data['instance_limit']);
        }
        elseif (\array_key_exists('instance_limit', $data) && $data['instance_limit'] === null) {
            $object->setInstanceLimit(null);
        }
        if (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] !== null) {
            $values_6 = array();
            foreach ($data['monthly_email_limit'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setMonthlyEmailLimit($values_6);
            unset($data['monthly_email_limit']);
        }
        elseif (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] === null) {
            $object->setMonthlyEmailLimit(null);
        }
        if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
            $values_7 = array();
            foreach ($data['start_date'] as $value_7) {
                $values_7[] = $value_7;
            }
            $object->setStartDate($values_7);
            unset($data['start_date']);
        }
        elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
            $values_8 = array();
            foreach ($data['renewal_date'] as $value_8) {
                $values_8[] = $value_8;
            }
            $object->setRenewalDate($values_8);
            unset($data['renewal_date']);
        }
        elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
            $object->setRenewalDate(null);
        }
        if (\array_key_exists('restricted_ips', $data) && $data['restricted_ips'] !== null) {
            $values_9 = array();
            foreach ($data['restricted_ips'] as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setRestrictedIps($values_9);
            unset($data['restricted_ips']);
        }
        elseif (\array_key_exists('restricted_ips', $data) && $data['restricted_ips'] === null) {
            $object->setRestrictedIps(null);
        }
        if (\array_key_exists('send_welcome_email', $data) && $data['send_welcome_email'] !== null) {
            $values_10 = array();
            foreach ($data['send_welcome_email'] as $value_10) {
                $values_10[] = $value_10;
            }
            $object->setSendWelcomeEmail($values_10);
            unset($data['send_welcome_email']);
        }
        elseif (\array_key_exists('send_welcome_email', $data) && $data['send_welcome_email'] === null) {
            $object->setSendWelcomeEmail(null);
        }
        if (\array_key_exists('welcome_email_template', $data) && $data['welcome_email_template'] !== null) {
            $values_11 = array();
            foreach ($data['welcome_email_template'] as $value_11) {
                $values_11[] = $value_11;
            }
            $object->setWelcomeEmailTemplate($values_11);
            unset($data['welcome_email_template']);
        }
        elseif (\array_key_exists('welcome_email_template', $data) && $data['welcome_email_template'] === null) {
            $object->setWelcomeEmailTemplate(null);
        }
        if (\array_key_exists('welcome_email_subject', $data) && $data['welcome_email_subject'] !== null) {
            $values_12 = array();
            foreach ($data['welcome_email_subject'] as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setWelcomeEmailSubject($values_12);
            unset($data['welcome_email_subject']);
        }
        elseif (\array_key_exists('welcome_email_subject', $data) && $data['welcome_email_subject'] === null) {
            $object->setWelcomeEmailSubject(null);
        }
        foreach ($data as $key => $value_13) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_13;
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
        if ($object->isInitialized('ipPoolUuids') && null !== $object->getIpPoolUuids()) {
            $values_1 = array();
            foreach ($object->getIpPoolUuids() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ip_pool_uuids'] = $values_1;
        }
        if ($object->isInitialized('planUuid') && null !== $object->getPlanUuid()) {
            $values_2 = array();
            foreach ($object->getPlanUuid() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['plan_uuid'] = $values_2;
        }
        if ($object->isInitialized('accountLimit') && null !== $object->getAccountLimit()) {
            $values_3 = array();
            foreach ($object->getAccountLimit() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['account_limit'] = $values_3;
        }
        if ($object->isInitialized('contactLimit') && null !== $object->getContactLimit()) {
            $values_4 = array();
            foreach ($object->getContactLimit() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['contact_limit'] = $values_4;
        }
        if ($object->isInitialized('instanceLimit') && null !== $object->getInstanceLimit()) {
            $values_5 = array();
            foreach ($object->getInstanceLimit() as $value_5) {
                $values_5[] = $value_5;
            }
            $data['instance_limit'] = $values_5;
        }
        if ($object->isInitialized('monthlyEmailLimit') && null !== $object->getMonthlyEmailLimit()) {
            $values_6 = array();
            foreach ($object->getMonthlyEmailLimit() as $value_6) {
                $values_6[] = $value_6;
            }
            $data['monthly_email_limit'] = $values_6;
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $values_7 = array();
            foreach ($object->getStartDate() as $value_7) {
                $values_7[] = $value_7;
            }
            $data['start_date'] = $values_7;
        }
        if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
            $values_8 = array();
            foreach ($object->getRenewalDate() as $value_8) {
                $values_8[] = $value_8;
            }
            $data['renewal_date'] = $values_8;
        }
        if ($object->isInitialized('restrictedIps') && null !== $object->getRestrictedIps()) {
            $values_9 = array();
            foreach ($object->getRestrictedIps() as $value_9) {
                $values_9[] = $value_9;
            }
            $data['restricted_ips'] = $values_9;
        }
        if ($object->isInitialized('sendWelcomeEmail') && null !== $object->getSendWelcomeEmail()) {
            $values_10 = array();
            foreach ($object->getSendWelcomeEmail() as $value_10) {
                $values_10[] = $value_10;
            }
            $data['send_welcome_email'] = $values_10;
        }
        if ($object->isInitialized('welcomeEmailTemplate') && null !== $object->getWelcomeEmailTemplate()) {
            $values_11 = array();
            foreach ($object->getWelcomeEmailTemplate() as $value_11) {
                $values_11[] = $value_11;
            }
            $data['welcome_email_template'] = $values_11;
        }
        if ($object->isInitialized('welcomeEmailSubject') && null !== $object->getWelcomeEmailSubject()) {
            $values_12 = array();
            foreach ($object->getWelcomeEmailSubject() as $value_12) {
                $values_12[] = $value_12;
            }
            $data['welcome_email_subject'] = $values_12;
        }
        foreach ($object as $key => $value_13) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_13;
            }
        }
        return $data;
    }
}