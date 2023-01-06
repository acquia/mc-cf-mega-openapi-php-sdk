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
class AuditNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Audit';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Audit';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\Audit();
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
        if (\array_key_exists('user_type', $data) && $data['user_type'] !== null) {
            $object->setUserType($data['user_type']);
            unset($data['user_type']);
        }
        elseif (\array_key_exists('user_type', $data) && $data['user_type'] === null) {
            $object->setUserType(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('event', $data) && $data['event'] !== null) {
            $object->setEvent($data['event']);
            unset($data['event']);
        }
        elseif (\array_key_exists('event', $data) && $data['event'] === null) {
            $object->setEvent(null);
        }
        if (\array_key_exists('auditable_type', $data) && $data['auditable_type'] !== null) {
            $object->setAuditableType($data['auditable_type']);
            unset($data['auditable_type']);
        }
        elseif (\array_key_exists('auditable_type', $data) && $data['auditable_type'] === null) {
            $object->setAuditableType(null);
        }
        if (\array_key_exists('auditable_uuid', $data) && $data['auditable_uuid'] !== null) {
            $object->setAuditableUuid($data['auditable_uuid']);
            unset($data['auditable_uuid']);
        }
        elseif (\array_key_exists('auditable_uuid', $data) && $data['auditable_uuid'] === null) {
            $object->setAuditableUuid(null);
        }
        if (\array_key_exists('old_values', $data) && $data['old_values'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['old_values'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setOldValues($values);
            unset($data['old_values']);
        }
        elseif (\array_key_exists('old_values', $data) && $data['old_values'] === null) {
            $object->setOldValues(null);
        }
        if (\array_key_exists('new_values', $data) && $data['new_values'] !== null) {
            $object->setNewValues($this->denormalizer->denormalize($data['new_values'], 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\AuditNewValues', 'json', $context));
            unset($data['new_values']);
        }
        elseif (\array_key_exists('new_values', $data) && $data['new_values'] === null) {
            $object->setNewValues(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('ip_address', $data) && $data['ip_address'] !== null) {
            $object->setIpAddress($data['ip_address']);
            unset($data['ip_address']);
        }
        elseif (\array_key_exists('ip_address', $data) && $data['ip_address'] === null) {
            $object->setIpAddress(null);
        }
        if (\array_key_exists('user_agent', $data) && $data['user_agent'] !== null) {
            $object->setUserAgent($data['user_agent']);
            unset($data['user_agent']);
        }
        elseif (\array_key_exists('user_agent', $data) && $data['user_agent'] === null) {
            $object->setUserAgent(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = array();
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTags($values_1);
            unset($data['tags']);
        }
        elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
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
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
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
        if ($object->isInitialized('uuid') && null !== $object->getUuid()) {
            $data['uuid'] = $object->getUuid();
        }
        if ($object->isInitialized('userType') && null !== $object->getUserType()) {
            $data['user_type'] = $object->getUserType();
        }
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if ($object->isInitialized('event') && null !== $object->getEvent()) {
            $data['event'] = $object->getEvent();
        }
        if ($object->isInitialized('auditableType') && null !== $object->getAuditableType()) {
            $data['auditable_type'] = $object->getAuditableType();
        }
        if ($object->isInitialized('auditableUuid') && null !== $object->getAuditableUuid()) {
            $data['auditable_uuid'] = $object->getAuditableUuid();
        }
        if ($object->isInitialized('oldValues') && null !== $object->getOldValues()) {
            $values = array();
            foreach ($object->getOldValues() as $key => $value) {
                $values[$key] = $value;
            }
            $data['old_values'] = $values;
        }
        if ($object->isInitialized('newValues') && null !== $object->getNewValues()) {
            $data['new_values'] = $this->normalizer->normalize($object->getNewValues(), 'json', $context);
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('ipAddress') && null !== $object->getIpAddress()) {
            $data['ip_address'] = $object->getIpAddress();
        }
        if ($object->isInitialized('userAgent') && null !== $object->getUserAgent()) {
            $data['user_agent'] = $object->getUserAgent();
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values_1 = array();
            foreach ($object->getTags() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['tags'] = $values_1;
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s\\Z');
        }
        foreach ($object as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_2;
            }
        }
        return $data;
    }
}