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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\User';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\User';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\User();
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
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('email_verified_at', $data) && $data['email_verified_at'] !== null) {
            $object->setEmailVerifiedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['email_verified_at']));
            unset($data['email_verified_at']);
        }
        elseif (\array_key_exists('email_verified_at', $data) && $data['email_verified_at'] === null) {
            $object->setEmailVerifiedAt(null);
        }
        if (\array_key_exists('all_accounts', $data) && $data['all_accounts'] !== null) {
            $object->setAllAccounts($data['all_accounts']);
            unset($data['all_accounts']);
        }
        elseif (\array_key_exists('all_accounts', $data) && $data['all_accounts'] === null) {
            $object->setAllAccounts(null);
        }
        if (\array_key_exists('last_login', $data) && $data['last_login'] !== null) {
            $object->setLastLogin(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['last_login']));
            unset($data['last_login']);
        }
        elseif (\array_key_exists('last_login', $data) && $data['last_login'] === null) {
            $object->setLastLogin(null);
        }
        if (\array_key_exists('super', $data) && $data['super'] !== null) {
            $object->setSuper($data['super']);
            unset($data['super']);
        }
        elseif (\array_key_exists('super', $data) && $data['super'] === null) {
            $object->setSuper(null);
        }
        if (\array_key_exists('notify_limit_violation', $data) && $data['notify_limit_violation'] !== null) {
            $object->setNotifyLimitViolation($data['notify_limit_violation']);
            unset($data['notify_limit_violation']);
        }
        elseif (\array_key_exists('notify_limit_violation', $data) && $data['notify_limit_violation'] === null) {
            $object->setNotifyLimitViolation(null);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('allAccounts') && null !== $object->getAllAccounts()) {
            $data['all_accounts'] = $object->getAllAccounts();
        }
        if ($object->isInitialized('super') && null !== $object->getSuper()) {
            $data['super'] = $object->getSuper();
        }
        if ($object->isInitialized('notifyLimitViolation') && null !== $object->getNotifyLimitViolation()) {
            $data['notify_limit_violation'] = $object->getNotifyLimitViolation();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}