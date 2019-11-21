<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Normalizer;

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

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Model\\PaginationMeta';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Model\\PaginationMeta';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \MauticInc\MEGA\OpenAPI\Model\PaginationMeta();
        if (property_exists($data, 'current_page')) {
            $object->setCurrentPage($data->{'current_page'});
        }
        if (property_exists($data, 'from')) {
            $object->setFrom($data->{'from'});
        }
        if (property_exists($data, 'last_page')) {
            $object->setLastPage($data->{'last_page'});
        }
        if (property_exists($data, 'path')) {
            $object->setPath($data->{'path'});
        }
        if (property_exists($data, 'per_page')) {
            $object->setPerPage($data->{'per_page'});
        }
        if (property_exists($data, 'to')) {
            $object->setTo($data->{'to'});
        }
        if (property_exists($data, 'total')) {
            $object->setTotal($data->{'total'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $data->{'current_page'} = $object->getCurrentPage();
        $data->{'from'} = $object->getFrom();
        $data->{'last_page'} = $object->getLastPage();
        $data->{'path'} = $object->getPath();
        $data->{'per_page'} = $object->getPerPage();
        $data->{'to'} = $object->getTo();
        $data->{'total'} = $object->getTotal();

        return $data;
    }
}
