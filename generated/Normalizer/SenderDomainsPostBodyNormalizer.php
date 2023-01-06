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
class SenderDomainsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomainsPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomainsPostBody';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomainsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sender_domain', $data) && $data['sender_domain'] !== null) {
            $object->setSenderDomain($data['sender_domain']);
            unset($data['sender_domain']);
        }
        elseif (\array_key_exists('sender_domain', $data) && $data['sender_domain'] === null) {
            $object->setSenderDomain(null);
        }
        if (\array_key_exists('bounce_domain', $data) && $data['bounce_domain'] !== null) {
            $object->setBounceDomain($data['bounce_domain']);
            unset($data['bounce_domain']);
        }
        elseif (\array_key_exists('bounce_domain', $data) && $data['bounce_domain'] === null) {
            $object->setBounceDomain(null);
        }
        if (\array_key_exists('tracking_domain', $data) && $data['tracking_domain'] !== null) {
            $object->setTrackingDomain($data['tracking_domain']);
            unset($data['tracking_domain']);
        }
        elseif (\array_key_exists('tracking_domain', $data) && $data['tracking_domain'] === null) {
            $object->setTrackingDomain(null);
        }
        if (\array_key_exists('default_from_name', $data) && $data['default_from_name'] !== null) {
            $object->setDefaultFromName($data['default_from_name']);
            unset($data['default_from_name']);
        }
        elseif (\array_key_exists('default_from_name', $data) && $data['default_from_name'] === null) {
            $object->setDefaultFromName(null);
        }
        if (\array_key_exists('default_from_email', $data) && $data['default_from_email'] !== null) {
            $object->setDefaultFromEmail($data['default_from_email']);
            unset($data['default_from_email']);
        }
        elseif (\array_key_exists('default_from_email', $data) && $data['default_from_email'] === null) {
            $object->setDefaultFromEmail(null);
        }
        if (\array_key_exists('esp', $data) && $data['esp'] !== null) {
            $object->setEsp($data['esp']);
            unset($data['esp']);
        }
        elseif (\array_key_exists('esp', $data) && $data['esp'] === null) {
            $object->setEsp(null);
        }
        if (\array_key_exists('sender_domain_validated', $data) && $data['sender_domain_validated'] !== null) {
            $object->setSenderDomainValidated($data['sender_domain_validated']);
            unset($data['sender_domain_validated']);
        }
        elseif (\array_key_exists('sender_domain_validated', $data) && $data['sender_domain_validated'] === null) {
            $object->setSenderDomainValidated(null);
        }
        if (\array_key_exists('bounce_domain_validated', $data) && $data['bounce_domain_validated'] !== null) {
            $object->setBounceDomainValidated($data['bounce_domain_validated']);
            unset($data['bounce_domain_validated']);
        }
        elseif (\array_key_exists('bounce_domain_validated', $data) && $data['bounce_domain_validated'] === null) {
            $object->setBounceDomainValidated(null);
        }
        if (\array_key_exists('tracking_domain_validated', $data) && $data['tracking_domain_validated'] !== null) {
            $object->setTrackingDomainValidated($data['tracking_domain_validated']);
            unset($data['tracking_domain_validated']);
        }
        elseif (\array_key_exists('tracking_domain_validated', $data) && $data['tracking_domain_validated'] === null) {
            $object->setTrackingDomainValidated(null);
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
        if ($object->isInitialized('senderDomain') && null !== $object->getSenderDomain()) {
            $data['sender_domain'] = $object->getSenderDomain();
        }
        if ($object->isInitialized('bounceDomain') && null !== $object->getBounceDomain()) {
            $data['bounce_domain'] = $object->getBounceDomain();
        }
        if ($object->isInitialized('trackingDomain') && null !== $object->getTrackingDomain()) {
            $data['tracking_domain'] = $object->getTrackingDomain();
        }
        if ($object->isInitialized('defaultFromName') && null !== $object->getDefaultFromName()) {
            $data['default_from_name'] = $object->getDefaultFromName();
        }
        if ($object->isInitialized('defaultFromEmail') && null !== $object->getDefaultFromEmail()) {
            $data['default_from_email'] = $object->getDefaultFromEmail();
        }
        if ($object->isInitialized('esp') && null !== $object->getEsp()) {
            $data['esp'] = $object->getEsp();
        }
        if ($object->isInitialized('senderDomainValidated') && null !== $object->getSenderDomainValidated()) {
            $data['sender_domain_validated'] = $object->getSenderDomainValidated();
        }
        if ($object->isInitialized('bounceDomainValidated') && null !== $object->getBounceDomainValidated()) {
            $data['bounce_domain_validated'] = $object->getBounceDomainValidated();
        }
        if ($object->isInitialized('trackingDomainValidated') && null !== $object->getTrackingDomainValidated()) {
            $data['tracking_domain_validated'] = $object->getTrackingDomainValidated();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}