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
class DatabaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Database';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\Database';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\Database();
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
        if (\array_key_exists('hostname', $data) && $data['hostname'] !== null) {
            $object->setHostname($data['hostname']);
            unset($data['hostname']);
        }
        elseif (\array_key_exists('hostname', $data) && $data['hostname'] === null) {
            $object->setHostname(null);
        }
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
        }
        if (\array_key_exists('open', $data) && $data['open'] !== null) {
            $object->setOpen($data['open']);
            unset($data['open']);
        }
        elseif (\array_key_exists('open', $data) && $data['open'] === null) {
            $object->setOpen(null);
        }
        if (\array_key_exists('debug', $data) && $data['debug'] !== null) {
            $object->setDebug($data['debug']);
            unset($data['debug']);
        }
        elseif (\array_key_exists('debug', $data) && $data['debug'] === null) {
            $object->setDebug(null);
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
        if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
            $data['hostname'] = $object->getHostname();
        }
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if ($object->isInitialized('open') && null !== $object->getOpen()) {
            $data['open'] = $object->getOpen();
        }
        if ($object->isInitialized('debug') && null !== $object->getDebug()) {
            $data['debug'] = $object->getDebug();
        }
        if ($object->isInitialized('locationUuid') && null !== $object->getLocationUuid()) {
            $data['location_uuid'] = $object->getLocationUuid();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}