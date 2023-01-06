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
class PaginationMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PaginationMeta';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PaginationMeta';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\PaginationMeta();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('current_page', $data) && $data['current_page'] !== null) {
            $object->setCurrentPage($data['current_page']);
            unset($data['current_page']);
        }
        elseif (\array_key_exists('current_page', $data) && $data['current_page'] === null) {
            $object->setCurrentPage(null);
        }
        if (\array_key_exists('from', $data) && $data['from'] !== null) {
            $object->setFrom($data['from']);
            unset($data['from']);
        }
        elseif (\array_key_exists('from', $data) && $data['from'] === null) {
            $object->setFrom(null);
        }
        if (\array_key_exists('last_page', $data) && $data['last_page'] !== null) {
            $object->setLastPage($data['last_page']);
            unset($data['last_page']);
        }
        elseif (\array_key_exists('last_page', $data) && $data['last_page'] === null) {
            $object->setLastPage(null);
        }
        if (\array_key_exists('path', $data) && $data['path'] !== null) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        elseif (\array_key_exists('path', $data) && $data['path'] === null) {
            $object->setPath(null);
        }
        if (\array_key_exists('per_page', $data) && $data['per_page'] !== null) {
            $object->setPerPage($data['per_page']);
            unset($data['per_page']);
        }
        elseif (\array_key_exists('per_page', $data) && $data['per_page'] === null) {
            $object->setPerPage(null);
        }
        if (\array_key_exists('to', $data) && $data['to'] !== null) {
            $object->setTo($data['to']);
            unset($data['to']);
        }
        elseif (\array_key_exists('to', $data) && $data['to'] === null) {
            $object->setTo(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
            unset($data['total']);
        }
        elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('currentPage') && null !== $object->getCurrentPage()) {
            $data['current_page'] = $object->getCurrentPage();
        }
        if ($object->isInitialized('from') && null !== $object->getFrom()) {
            $data['from'] = $object->getFrom();
        }
        if ($object->isInitialized('lastPage') && null !== $object->getLastPage()) {
            $data['last_page'] = $object->getLastPage();
        }
        if ($object->isInitialized('path') && null !== $object->getPath()) {
            $data['path'] = $object->getPath();
        }
        if ($object->isInitialized('perPage') && null !== $object->getPerPage()) {
            $data['per_page'] = $object->getPerPage();
        }
        if ($object->isInitialized('to') && null !== $object->getTo()) {
            $data['to'] = $object->getTo();
        }
        if ($object->isInitialized('total') && null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}