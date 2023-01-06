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
class CustomerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Customer';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Customer';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\Customer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('uuid', $data) && $data['uuid'] !== null) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
        }
        elseif (\array_key_exists('uuid', $data) && $data['uuid'] === null) {
            $object->setUuid(null);
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
        if (\array_key_exists('instance_limit', $data) && $data['instance_limit'] !== null) {
            $object->setInstanceLimit($data['instance_limit']);
            unset($data['instance_limit']);
        }
        elseif (\array_key_exists('instance_limit', $data) && $data['instance_limit'] === null) {
            $object->setInstanceLimit(null);
        }
        if (\array_key_exists('contact_limit', $data) && $data['contact_limit'] !== null) {
            $object->setContactLimit($data['contact_limit']);
            unset($data['contact_limit']);
        }
        elseif (\array_key_exists('contact_limit', $data) && $data['contact_limit'] === null) {
            $object->setContactLimit(null);
        }
        if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['start_date']));
            unset($data['start_date']);
        }
        elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
            $object->setRenewalDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['renewal_date']));
            unset($data['renewal_date']);
        }
        elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
            $object->setRenewalDate(null);
        }
        if (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] !== null) {
            $object->setMonthlyEmailLimit($data['monthly_email_limit']);
            unset($data['monthly_email_limit']);
        }
        elseif (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] === null) {
            $object->setMonthlyEmailLimit(null);
        }
        if (\array_key_exists('plan_uuid', $data) && $data['plan_uuid'] !== null) {
            $object->setPlanUuid($data['plan_uuid']);
            unset($data['plan_uuid']);
        }
        elseif (\array_key_exists('plan_uuid', $data) && $data['plan_uuid'] === null) {
            $object->setPlanUuid(null);
        }
        if (\array_key_exists('restricted_ips', $data) && $data['restricted_ips'] !== null) {
            $object->setRestrictedIps($data['restricted_ips']);
            unset($data['restricted_ips']);
        }
        elseif (\array_key_exists('restricted_ips', $data) && $data['restricted_ips'] === null) {
            $object->setRestrictedIps(null);
        }
        if (\array_key_exists('ip_pools', $data) && $data['ip_pools'] !== null) {
            $values = array();
            foreach ($data['ip_pools'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPool', 'json', $context);
            }
            $object->setIpPools($values);
            unset($data['ip_pools']);
        }
        elseif (\array_key_exists('ip_pools', $data) && $data['ip_pools'] === null) {
            $object->setIpPools(null);
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
        if (\array_key_exists('custom_url', $data) && $data['custom_url'] !== null) {
            $object->setCustomUrl($data['custom_url']);
            unset($data['custom_url']);
        }
        elseif (\array_key_exists('custom_url', $data) && $data['custom_url'] === null) {
            $object->setCustomUrl(null);
        }
        if (\array_key_exists('custom_url_validated', $data) && $data['custom_url_validated'] !== null) {
            $object->setCustomUrlValidated($data['custom_url_validated']);
            unset($data['custom_url_validated']);
        }
        elseif (\array_key_exists('custom_url_validated', $data) && $data['custom_url_validated'] === null) {
            $object->setCustomUrlValidated(null);
        }
        if (\array_key_exists('favicon', $data) && $data['favicon'] !== null) {
            $object->setFavicon($data['favicon']);
            unset($data['favicon']);
        }
        elseif (\array_key_exists('favicon', $data) && $data['favicon'] === null) {
            $object->setFavicon(null);
        }
        if (\array_key_exists('login_logo', $data) && $data['login_logo'] !== null) {
            $object->setLoginLogo($data['login_logo']);
            unset($data['login_logo']);
        }
        elseif (\array_key_exists('login_logo', $data) && $data['login_logo'] === null) {
            $object->setLoginLogo(null);
        }
        if (\array_key_exists('main_logo', $data) && $data['main_logo'] !== null) {
            $object->setMainLogo($data['main_logo']);
            unset($data['main_logo']);
        }
        elseif (\array_key_exists('main_logo', $data) && $data['main_logo'] === null) {
            $object->setMainLogo(null);
        }
        if (\array_key_exists('openid_provider_url', $data) && $data['openid_provider_url'] !== null) {
            $object->setOpenidProviderUrl($data['openid_provider_url']);
            unset($data['openid_provider_url']);
        }
        elseif (\array_key_exists('openid_provider_url', $data) && $data['openid_provider_url'] === null) {
            $object->setOpenidProviderUrl(null);
        }
        if (\array_key_exists('openid_client_id', $data) && $data['openid_client_id'] !== null) {
            $object->setOpenidClientId($data['openid_client_id']);
            unset($data['openid_client_id']);
        }
        elseif (\array_key_exists('openid_client_id', $data) && $data['openid_client_id'] === null) {
            $object->setOpenidClientId(null);
        }
        if (\array_key_exists('openid_client_secret', $data) && $data['openid_client_secret'] !== null) {
            $object->setOpenidClientSecret($data['openid_client_secret']);
            unset($data['openid_client_secret']);
        }
        elseif (\array_key_exists('openid_client_secret', $data) && $data['openid_client_secret'] === null) {
            $object->setOpenidClientSecret(null);
        }
        if (\array_key_exists('openid_scope', $data) && $data['openid_scope'] !== null) {
            $object->setOpenidScope($data['openid_scope']);
            unset($data['openid_scope']);
        }
        elseif (\array_key_exists('openid_scope', $data) && $data['openid_scope'] === null) {
            $object->setOpenidScope(null);
        }
        if (\array_key_exists('openid_response_type', $data) && $data['openid_response_type'] !== null) {
            $object->setOpenidResponseType($data['openid_response_type']);
            unset($data['openid_response_type']);
        }
        elseif (\array_key_exists('openid_response_type', $data) && $data['openid_response_type'] === null) {
            $object->setOpenidResponseType(null);
        }
        if (\array_key_exists('openid_extra_parameter', $data) && $data['openid_extra_parameter'] !== null) {
            $object->setOpenidExtraParameter($data['openid_extra_parameter']);
            unset($data['openid_extra_parameter']);
        }
        elseif (\array_key_exists('openid_extra_parameter', $data) && $data['openid_extra_parameter'] === null) {
            $object->setOpenidExtraParameter(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['created_at']));
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['updated_at']));
            unset($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('_links', $data) && $data['_links'] !== null) {
            $values_1 = array();
            foreach ($data['_links'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\RelLink', 'json', $context);
            }
            $object->setLinks($values_1);
            unset($data['_links']);
        }
        elseif (\array_key_exists('_links', $data) && $data['_links'] === null) {
            $object->setLinks(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $data['name'] = $object->getName();
        $data['account_limit'] = $object->getAccountLimit();
        $data['instance_limit'] = $object->getInstanceLimit();
        $data['contact_limit'] = $object->getContactLimit();
        if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
            $data['renewal_date'] = $object->getRenewalDate()->format('Y-m-d\\TH:i:s\\Z');
        }
        $data['monthly_email_limit'] = $object->getMonthlyEmailLimit();
        $data['plan_uuid'] = $object->getPlanUuid();
        if ($object->isInitialized('restrictedIps') && null !== $object->getRestrictedIps()) {
            $data['restricted_ips'] = $object->getRestrictedIps();
        }
        $values = array();
        foreach ($object->getIpPools() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['ip_pools'] = $values;
        if ($object->isInitialized('sendWelcomeEmail') && null !== $object->getSendWelcomeEmail()) {
            $data['send_welcome_email'] = $object->getSendWelcomeEmail();
        }
        if ($object->isInitialized('welcomeEmailSubject') && null !== $object->getWelcomeEmailSubject()) {
            $data['welcome_email_subject'] = $object->getWelcomeEmailSubject();
        }
        if ($object->isInitialized('welcomeEmailTemplate') && null !== $object->getWelcomeEmailTemplate()) {
            $data['welcome_email_template'] = $object->getWelcomeEmailTemplate();
        }
        if ($object->isInitialized('customUrl') && null !== $object->getCustomUrl()) {
            $data['custom_url'] = $object->getCustomUrl();
        }
        if ($object->isInitialized('customUrlValidated') && null !== $object->getCustomUrlValidated()) {
            $data['custom_url_validated'] = $object->getCustomUrlValidated();
        }
        if ($object->isInitialized('favicon') && null !== $object->getFavicon()) {
            $data['favicon'] = $object->getFavicon();
        }
        if ($object->isInitialized('loginLogo') && null !== $object->getLoginLogo()) {
            $data['login_logo'] = $object->getLoginLogo();
        }
        if ($object->isInitialized('mainLogo') && null !== $object->getMainLogo()) {
            $data['main_logo'] = $object->getMainLogo();
        }
        if ($object->isInitialized('openidProviderUrl') && null !== $object->getOpenidProviderUrl()) {
            $data['openid_provider_url'] = $object->getOpenidProviderUrl();
        }
        if ($object->isInitialized('openidClientId') && null !== $object->getOpenidClientId()) {
            $data['openid_client_id'] = $object->getOpenidClientId();
        }
        if ($object->isInitialized('openidClientSecret') && null !== $object->getOpenidClientSecret()) {
            $data['openid_client_secret'] = $object->getOpenidClientSecret();
        }
        if ($object->isInitialized('openidScope') && null !== $object->getOpenidScope()) {
            $data['openid_scope'] = $object->getOpenidScope();
        }
        if ($object->isInitialized('openidResponseType') && null !== $object->getOpenidResponseType()) {
            $data['openid_response_type'] = $object->getOpenidResponseType();
        }
        if ($object->isInitialized('openidExtraParameter') && null !== $object->getOpenidExtraParameter()) {
            $data['openid_extra_parameter'] = $object->getOpenidExtraParameter();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}