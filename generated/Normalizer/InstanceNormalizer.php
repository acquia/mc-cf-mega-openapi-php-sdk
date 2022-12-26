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
class InstanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Instance';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Instance';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\Instance();
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
        if (\array_key_exists('active_at', $data) && $data['active_at'] !== null) {
            $object->setActiveAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['active_at']));
            unset($data['active_at']);
        }
        elseif (\array_key_exists('active_at', $data) && $data['active_at'] === null) {
            $object->setActiveAt(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('subdomain', $data) && $data['subdomain'] !== null) {
            $object->setSubdomain($data['subdomain']);
            unset($data['subdomain']);
        }
        elseif (\array_key_exists('subdomain', $data) && $data['subdomain'] === null) {
            $object->setSubdomain(null);
        }
        if (\array_key_exists('custom_domain', $data) && $data['custom_domain'] !== null) {
            $object->setCustomDomain($data['custom_domain']);
            unset($data['custom_domain']);
        }
        elseif (\array_key_exists('custom_domain', $data) && $data['custom_domain'] === null) {
            $object->setCustomDomain(null);
        }
        if (\array_key_exists('location_cname', $data) && $data['location_cname'] !== null) {
            $object->setLocationCname($data['location_cname']);
            unset($data['location_cname']);
        }
        elseif (\array_key_exists('location_cname', $data) && $data['location_cname'] === null) {
            $object->setLocationCname(null);
        }
        if (\array_key_exists('db_name', $data) && $data['db_name'] !== null) {
            $object->setDbName($data['db_name']);
            unset($data['db_name']);
        }
        elseif (\array_key_exists('db_name', $data) && $data['db_name'] === null) {
            $object->setDbName(null);
        }
        if (\array_key_exists('db_host', $data) && $data['db_host'] !== null) {
            $object->setDbHost($data['db_host']);
            unset($data['db_host']);
        }
        elseif (\array_key_exists('db_host', $data) && $data['db_host'] === null) {
            $object->setDbHost(null);
        }
        if (\array_key_exists('plan_name', $data) && $data['plan_name'] !== null) {
            $object->setPlanName($data['plan_name']);
            unset($data['plan_name']);
        }
        elseif (\array_key_exists('plan_name', $data) && $data['plan_name'] === null) {
            $object->setPlanName(null);
        }
        if (\array_key_exists('trial_expiration', $data) && $data['trial_expiration'] !== null) {
            $object->setTrialExpiration(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['trial_expiration']));
            unset($data['trial_expiration']);
        }
        elseif (\array_key_exists('trial_expiration', $data) && $data['trial_expiration'] === null) {
            $object->setTrialExpiration(null);
        }
        if (\array_key_exists('user_email', $data) && $data['user_email'] !== null) {
            $object->setUserEmail($data['user_email']);
            unset($data['user_email']);
        }
        elseif (\array_key_exists('user_email', $data) && $data['user_email'] === null) {
            $object->setUserEmail(null);
        }
        if (\array_key_exists('location_uuid', $data) && $data['location_uuid'] !== null) {
            $object->setLocationUuid($data['location_uuid']);
            unset($data['location_uuid']);
        }
        elseif (\array_key_exists('location_uuid', $data) && $data['location_uuid'] === null) {
            $object->setLocationUuid(null);
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
        if ($object->isInitialized('subdomain') && null !== $object->getSubdomain()) {
            $data['subdomain'] = $object->getSubdomain();
        }
        if ($object->isInitialized('customDomain') && null !== $object->getCustomDomain()) {
            $data['custom_domain'] = $object->getCustomDomain();
        }
        if ($object->isInitialized('locationCname') && null !== $object->getLocationCname()) {
            $data['location_cname'] = $object->getLocationCname();
        }
        if ($object->isInitialized('dbName') && null !== $object->getDbName()) {
            $data['db_name'] = $object->getDbName();
        }
        if ($object->isInitialized('dbHost') && null !== $object->getDbHost()) {
            $data['db_host'] = $object->getDbHost();
        }
        if ($object->isInitialized('planName') && null !== $object->getPlanName()) {
            $data['plan_name'] = $object->getPlanName();
        }
        if ($object->isInitialized('trialExpiration') && null !== $object->getTrialExpiration()) {
            $data['trial_expiration'] = $object->getTrialExpiration()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('userEmail') && null !== $object->getUserEmail()) {
            $data['user_email'] = $object->getUserEmail();
        }
        if ($object->isInitialized('locationUuid') && null !== $object->getLocationUuid()) {
            $data['location_uuid'] = $object->getLocationUuid();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}