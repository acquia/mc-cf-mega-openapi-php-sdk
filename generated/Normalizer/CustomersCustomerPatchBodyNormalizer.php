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
class CustomersCustomerPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerPatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\CustomersCustomerPatchBody';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('account_limit', $data) && $data['account_limit'] !== null) {
            $object->setAccountLimit($data['account_limit']);
            unset($data['account_limit']);
        }
        elseif (\array_key_exists('account_limit', $data) && $data['account_limit'] === null) {
            $object->setAccountLimit(null);
        }
        if (\array_key_exists('contact_limit', $data) && $data['contact_limit'] !== null) {
            $object->setContactLimit($data['contact_limit']);
            unset($data['contact_limit']);
        }
        elseif (\array_key_exists('contact_limit', $data) && $data['contact_limit'] === null) {
            $object->setContactLimit(null);
        }
        if (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] !== null) {
            $object->setMonthlyEmailLimit($data['monthly_email_limit']);
            unset($data['monthly_email_limit']);
        }
        elseif (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] === null) {
            $object->setMonthlyEmailLimit(null);
        }
        if (\array_key_exists('instance_limit', $data) && $data['instance_limit'] !== null) {
            $object->setInstanceLimit($data['instance_limit']);
            unset($data['instance_limit']);
        }
        elseif (\array_key_exists('instance_limit', $data) && $data['instance_limit'] === null) {
            $object->setInstanceLimit(null);
        }
        if (\array_key_exists('plan_uuid', $data) && $data['plan_uuid'] !== null) {
            $object->setPlanUuid($data['plan_uuid']);
            unset($data['plan_uuid']);
        }
        elseif (\array_key_exists('plan_uuid', $data) && $data['plan_uuid'] === null) {
            $object->setPlanUuid(null);
        }
        if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
            unset($data['start_date']);
        }
        elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
            $object->setRenewalDate(\DateTime::createFromFormat('Y-m-d', $data['renewal_date'])->setTime(0, 0, 0));
            unset($data['renewal_date']);
        }
        elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
            $object->setRenewalDate(null);
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
        if (\array_key_exists('send_welcome_email', $data) && $data['send_welcome_email'] !== null) {
            $object->setSendWelcomeEmail($data['send_welcome_email']);
            unset($data['send_welcome_email']);
        }
        elseif (\array_key_exists('send_welcome_email', $data) && $data['send_welcome_email'] === null) {
            $object->setSendWelcomeEmail(null);
        }
        if (\array_key_exists('welcome_email_subject', $data) && $data['welcome_email_subject'] !== null) {
            $object->setWelcomeEmailSubject($data['welcome_email_subject']);
            unset($data['welcome_email_subject']);
        }
        elseif (\array_key_exists('welcome_email_subject', $data) && $data['welcome_email_subject'] === null) {
            $object->setWelcomeEmailSubject(null);
        }
        if (\array_key_exists('welcome_email_template', $data) && $data['welcome_email_template'] !== null) {
            $object->setWelcomeEmailTemplate($data['welcome_email_template']);
            unset($data['welcome_email_template']);
        }
        elseif (\array_key_exists('welcome_email_template', $data) && $data['welcome_email_template'] === null) {
            $object->setWelcomeEmailTemplate(null);
        }
        if (\array_key_exists('restricted_ips', $data) && $data['restricted_ips'] !== null) {
            $object->setRestrictedIps($data['restricted_ips']);
            unset($data['restricted_ips']);
        }
        elseif (\array_key_exists('restricted_ips', $data) && $data['restricted_ips'] === null) {
            $object->setRestrictedIps(null);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('accountLimit') && null !== $object->getAccountLimit()) {
            $data['account_limit'] = $object->getAccountLimit();
        }
        if ($object->isInitialized('contactLimit') && null !== $object->getContactLimit()) {
            $data['contact_limit'] = $object->getContactLimit();
        }
        if ($object->isInitialized('monthlyEmailLimit') && null !== $object->getMonthlyEmailLimit()) {
            $data['monthly_email_limit'] = $object->getMonthlyEmailLimit();
        }
        if ($object->isInitialized('instanceLimit') && null !== $object->getInstanceLimit()) {
            $data['instance_limit'] = $object->getInstanceLimit();
        }
        if ($object->isInitialized('planUuid') && null !== $object->getPlanUuid()) {
            $data['plan_uuid'] = $object->getPlanUuid();
        }
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate()->format('Y-m-d');
        }
        if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
            $data['renewal_date'] = $object->getRenewalDate()->format('Y-m-d');
        }
        if ($object->isInitialized('ipPoolUuids') && null !== $object->getIpPoolUuids()) {
            $values = array();
            foreach ($object->getIpPoolUuids() as $value) {
                $values[] = $value;
            }
            $data['ip_pool_uuids'] = $values;
        }
        if ($object->isInitialized('sendWelcomeEmail') && null !== $object->getSendWelcomeEmail()) {
            $data['send_welcome_email'] = $object->getSendWelcomeEmail();
        }
        if ($object->isInitialized('welcomeEmailSubject') && null !== $object->getWelcomeEmailSubject()) {
            $data['welcome_email_subject'] = $object->getWelcomeEmailSubject();
        }
        if ($object->isInitialized('welcomeEmailTemplate') && null !== $object->getWelcomeEmailTemplate()) {
            $data['welcome_email_template'] = $object->getWelcomeEmailTemplate();
        }
        if ($object->isInitialized('restrictedIps') && null !== $object->getRestrictedIps()) {
            $data['restricted_ips'] = $object->getRestrictedIps();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}