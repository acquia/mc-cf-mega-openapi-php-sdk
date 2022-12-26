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
class DbServersUuidPatchResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\DbServersUuidPatchResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\DbServersUuidPatchResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hostname', $data) && $data['hostname'] !== null) {
            $values = array();
            foreach ($data['hostname'] as $value) {
                $values[] = $value;
            }
            $object->setHostname($values);
            unset($data['hostname']);
        }
        elseif (\array_key_exists('hostname', $data) && $data['hostname'] === null) {
            $object->setHostname(null);
        }
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $values_1 = array();
            foreach ($data['username'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setUsername($values_1);
            unset($data['username']);
        }
        elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
        }
        if (\array_key_exists('password', $data) && $data['password'] !== null) {
            $values_2 = array();
            foreach ($data['password'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPassword($values_2);
            unset($data['password']);
        }
        elseif (\array_key_exists('password', $data) && $data['password'] === null) {
            $object->setPassword(null);
        }
        if (\array_key_exists('location_uuid', $data) && $data['location_uuid'] !== null) {
            $values_3 = array();
            foreach ($data['location_uuid'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setLocationUuid($values_3);
            unset($data['location_uuid']);
        }
        elseif (\array_key_exists('location_uuid', $data) && $data['location_uuid'] === null) {
            $object->setLocationUuid(null);
        }
        if (\array_key_exists('open', $data) && $data['open'] !== null) {
            $values_4 = array();
            foreach ($data['open'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setOpen($values_4);
            unset($data['open']);
        }
        elseif (\array_key_exists('open', $data) && $data['open'] === null) {
            $object->setOpen(null);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
            $values = array();
            foreach ($object->getHostname() as $value) {
                $values[] = $value;
            }
            $data['hostname'] = $values;
        }
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $values_1 = array();
            foreach ($object->getUsername() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['username'] = $values_1;
        }
        if ($object->isInitialized('password') && null !== $object->getPassword()) {
            $values_2 = array();
            foreach ($object->getPassword() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['password'] = $values_2;
        }
        if ($object->isInitialized('locationUuid') && null !== $object->getLocationUuid()) {
            $values_3 = array();
            foreach ($object->getLocationUuid() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['location_uuid'] = $values_3;
        }
        if ($object->isInitialized('open') && null !== $object->getOpen()) {
            $values_4 = array();
            foreach ($object->getOpen() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['open'] = $values_4;
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_5;
            }
        }
        return $data;
    }
}