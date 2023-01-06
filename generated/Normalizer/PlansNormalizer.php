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
class PlansNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Plans';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Plans';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\Plans();
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
        if (\array_key_exists('alias', $data) && $data['alias'] !== null) {
            $object->setAlias($data['alias']);
            unset($data['alias']);
        }
        elseif (\array_key_exists('alias', $data) && $data['alias'] === null) {
            $object->setAlias(null);
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
        if (\array_key_exists('instance_limit', $data) && $data['instance_limit'] !== null) {
            $object->setInstanceLimit($data['instance_limit']);
            unset($data['instance_limit']);
        }
        elseif (\array_key_exists('instance_limit', $data) && $data['instance_limit'] === null) {
            $object->setInstanceLimit(null);
        }
        if (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] !== null) {
            $object->setMonthlyEmailLimit($data['monthly_email_limit']);
            unset($data['monthly_email_limit']);
        }
        elseif (\array_key_exists('monthly_email_limit', $data) && $data['monthly_email_limit'] === null) {
            $object->setMonthlyEmailLimit(null);
        }
        if (\array_key_exists('users_limit', $data) && $data['users_limit'] !== null) {
            $object->setUsersLimit($data['users_limit']);
            unset($data['users_limit']);
        }
        elseif (\array_key_exists('users_limit', $data) && $data['users_limit'] === null) {
            $object->setUsersLimit(null);
        }
        if (\array_key_exists('trial_length', $data) && $data['trial_length'] !== null) {
            $object->setTrialLength($data['trial_length']);
            unset($data['trial_length']);
        }
        elseif (\array_key_exists('trial_length', $data) && $data['trial_length'] === null) {
            $object->setTrialLength(null);
        }
        if (\array_key_exists('template_instance_uuid', $data) && $data['template_instance_uuid'] !== null) {
            $object->setTemplateInstanceUuid($data['template_instance_uuid']);
            unset($data['template_instance_uuid']);
        }
        elseif (\array_key_exists('template_instance_uuid', $data) && $data['template_instance_uuid'] === null) {
            $object->setTemplateInstanceUuid(null);
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
            $values = array();
            foreach ($data['_links'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\RelLink', 'json', $context);
            }
            $object->setLinks($values);
            unset($data['_links']);
        }
        elseif (\array_key_exists('_links', $data) && $data['_links'] === null) {
            $object->setLinks(null);
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
        $data['name'] = $object->getName();
        $data['alias'] = $object->getAlias();
        if ($object->isInitialized('accountLimit') && null !== $object->getAccountLimit()) {
            $data['account_limit'] = $object->getAccountLimit();
        }
        if ($object->isInitialized('contactLimit') && null !== $object->getContactLimit()) {
            $data['contact_limit'] = $object->getContactLimit();
        }
        if ($object->isInitialized('instanceLimit') && null !== $object->getInstanceLimit()) {
            $data['instance_limit'] = $object->getInstanceLimit();
        }
        if ($object->isInitialized('monthlyEmailLimit') && null !== $object->getMonthlyEmailLimit()) {
            $data['monthly_email_limit'] = $object->getMonthlyEmailLimit();
        }
        if ($object->isInitialized('usersLimit') && null !== $object->getUsersLimit()) {
            $data['users_limit'] = $object->getUsersLimit();
        }
        if ($object->isInitialized('trialLength') && null !== $object->getTrialLength()) {
            $data['trial_length'] = $object->getTrialLength();
        }
        if ($object->isInitialized('templateInstanceUuid') && null !== $object->getTemplateInstanceUuid()) {
            $data['template_instance_uuid'] = $object->getTemplateInstanceUuid();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}