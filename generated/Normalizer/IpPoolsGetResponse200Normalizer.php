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
class IpPoolsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPoolsGetResponse200';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPoolsGetResponse200';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values = array();
            foreach ($data['data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\IpPool', 'json', $context);
            }
            $object->setData($values);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('links', $data) && $data['links'] !== null) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PaginationLinks', 'json', $context));
            unset($data['links']);
        }
        elseif (\array_key_exists('links', $data) && $data['links'] === null) {
            $object->setLinks(null);
        }
        if (\array_key_exists('meta', $data) && $data['meta'] !== null) {
            $object->setMeta($this->denormalizer->denormalize($data['meta'], 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PaginationMeta', 'json', $context));
            unset($data['meta']);
        }
        elseif (\array_key_exists('meta', $data) && $data['meta'] === null) {
            $object->setMeta(null);
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
        if ($object->isInitialized('data') && null !== $object->getData()) {
            $values = array();
            foreach ($object->getData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['data'] = $values;
        }
        if ($object->isInitialized('links') && null !== $object->getLinks()) {
            $data['links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        if ($object->isInitialized('meta') && null !== $object->getMeta()) {
            $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}