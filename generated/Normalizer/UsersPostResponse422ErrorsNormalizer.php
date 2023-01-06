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
class UsersPostResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\UsersPostResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\UsersPostResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostResponse422Errors();
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
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $values_1 = array();
            foreach ($data['email'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEmail($values_1);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
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
        if (\array_key_exists('notify_limit_violation', $data) && $data['notify_limit_violation'] !== null) {
            $values_3 = array();
            foreach ($data['notify_limit_violation'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setNotifyLimitViolation($values_3);
            unset($data['notify_limit_violation']);
        }
        elseif (\array_key_exists('notify_limit_violation', $data) && $data['notify_limit_violation'] === null) {
            $object->setNotifyLimitViolation(null);
        }
        if (\array_key_exists('super', $data) && $data['super'] !== null) {
            $values_4 = array();
            foreach ($data['super'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setSuper($values_4);
            unset($data['super']);
        }
        elseif (\array_key_exists('super', $data) && $data['super'] === null) {
            $object->setSuper(null);
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
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $values = array();
            foreach ($object->getName() as $value) {
                $values[] = $value;
            }
            $data['name'] = $values;
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $values_1 = array();
            foreach ($object->getEmail() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['email'] = $values_1;
        }
        if ($object->isInitialized('password') && null !== $object->getPassword()) {
            $values_2 = array();
            foreach ($object->getPassword() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['password'] = $values_2;
        }
        if ($object->isInitialized('notifyLimitViolation') && null !== $object->getNotifyLimitViolation()) {
            $values_3 = array();
            foreach ($object->getNotifyLimitViolation() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['notify_limit_violation'] = $values_3;
        }
        if ($object->isInitialized('super') && null !== $object->getSuper()) {
            $values_4 = array();
            foreach ($object->getSuper() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['super'] = $values_4;
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_5;
            }
        }
        return $data;
    }
}