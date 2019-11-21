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

class LocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Model\\Location';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Model\\Location';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \MauticInc\MEGA\OpenAPI\Model\Location();
        if (property_exists($data, 'uuid')) {
            $object->setUuid($data->{'uuid'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at')) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $data->{'updated_at'}));
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'ips')) {
            $object->setIps($data->{'ips'});
        }
        if (property_exists($data, 'cname')) {
            $object->setCname($data->{'cname'});
        }
        if (property_exists($data, '_links')) {
            $values = [];
            foreach ($data->{'_links'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'MauticInc\\MEGA\\OpenAPI\\Model\\RelLink', 'json', $context);
            }
            $object->setLinks($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $data->{'uuid'} = $object->getUuid();
        $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s\Z");
        $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:s\Z");
        $data->{'name'} = $object->getName();
        $data->{'ips'} = $object->getIps();
        $data->{'cname'} = $object->getCname();
        $values = [];
        foreach ($object->getLinks() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data->{'_links'} = $values;

        return $data;
    }
}
