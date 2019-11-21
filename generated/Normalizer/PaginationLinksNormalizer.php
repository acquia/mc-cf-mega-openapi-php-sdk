<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PaginationLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PaginationLinks';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\PaginationLinks';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\PaginationLinks();
        if (property_exists($data, 'first') && $data->{'first'} !== null) {
            $object->setFirst($data->{'first'});
        }
        if (property_exists($data, 'last') && $data->{'last'} !== null) {
            $object->setLast($data->{'last'});
        }
        if (property_exists($data, 'prev') && $data->{'prev'} !== null) {
            $object->setPrev($data->{'prev'});
        }
        if (property_exists($data, 'next') && $data->{'next'} !== null) {
            $object->setNext($data->{'next'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFirst()) {
            $data->{'first'} = $object->getFirst();
        }
        if (null !== $object->getLast()) {
            $data->{'last'} = $object->getLast();
        }
        if (null !== $object->getPrev()) {
            $data->{'prev'} = $object->getPrev();
        }
        if (null !== $object->getNext()) {
            $data->{'next'} = $object->getNext();
        }

        return $data;
    }
}