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
class SenderDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomain';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\SenderDomain';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\SenderDomain();
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
        if (\array_key_exists('customer_id', $data) && $data['customer_id'] !== null) {
            $object->setCustomerId($data['customer_id']);
            unset($data['customer_id']);
        }
        elseif (\array_key_exists('customer_id', $data) && $data['customer_id'] === null) {
            $object->setCustomerId(null);
        }
        if (\array_key_exists('sender_domain_validated', $data) && $data['sender_domain_validated'] !== null) {
            $object->setSenderDomainValidated($data['sender_domain_validated']);
            unset($data['sender_domain_validated']);
        }
        elseif (\array_key_exists('sender_domain_validated', $data) && $data['sender_domain_validated'] === null) {
            $object->setSenderDomainValidated(null);
        }
        if (\array_key_exists('sender_domain_details', $data) && $data['sender_domain_details'] !== null) {
            $object->setSenderDomainDetails($data['sender_domain_details']);
            unset($data['sender_domain_details']);
        }
        elseif (\array_key_exists('sender_domain_details', $data) && $data['sender_domain_details'] === null) {
            $object->setSenderDomainDetails(null);
        }
        if (\array_key_exists('bounce_domain_validated', $data) && $data['bounce_domain_validated'] !== null) {
            $object->setBounceDomainValidated($data['bounce_domain_validated']);
            unset($data['bounce_domain_validated']);
        }
        elseif (\array_key_exists('bounce_domain_validated', $data) && $data['bounce_domain_validated'] === null) {
            $object->setBounceDomainValidated(null);
        }
        if (\array_key_exists('bounce_domain_details', $data) && $data['bounce_domain_details'] !== null) {
            $object->setBounceDomainDetails($data['bounce_domain_details']);
            unset($data['bounce_domain_details']);
        }
        elseif (\array_key_exists('bounce_domain_details', $data) && $data['bounce_domain_details'] === null) {
            $object->setBounceDomainDetails(null);
        }
        if (\array_key_exists('tracking_domain_validated', $data) && $data['tracking_domain_validated'] !== null) {
            $object->setTrackingDomainValidated($data['tracking_domain_validated']);
            unset($data['tracking_domain_validated']);
        }
        elseif (\array_key_exists('tracking_domain_validated', $data) && $data['tracking_domain_validated'] === null) {
            $object->setTrackingDomainValidated(null);
        }
        if (\array_key_exists('tracking_domain_details', $data) && $data['tracking_domain_details'] !== null) {
            $object->setTrackingDomainDetails($data['tracking_domain_details']);
            unset($data['tracking_domain_details']);
        }
        elseif (\array_key_exists('tracking_domain_details', $data) && $data['tracking_domain_details'] === null) {
            $object->setTrackingDomainDetails(null);
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
        if (\array_key_exists('esp_account_id', $data) && $data['esp_account_id'] !== null) {
            $object->setEspAccountId($data['esp_account_id']);
            unset($data['esp_account_id']);
        }
        elseif (\array_key_exists('esp_account_id', $data) && $data['esp_account_id'] === null) {
            $object->setEspAccountId(null);
        }
        if (\array_key_exists('esp_api_key', $data) && $data['esp_api_key'] !== null) {
            $object->setEspApiKey($data['esp_api_key']);
            unset($data['esp_api_key']);
        }
        elseif (\array_key_exists('esp_api_key', $data) && $data['esp_api_key'] === null) {
            $object->setEspApiKey(null);
        }
        if (\array_key_exists('esp', $data) && $data['esp'] !== null) {
            $object->setEsp($data['esp']);
            unset($data['esp']);
        }
        elseif (\array_key_exists('esp', $data) && $data['esp'] === null) {
            $object->setEsp(null);
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
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s\\Z', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
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
        $data['sender_domain'] = $object->getSenderDomain();
        $data['bounce_domain'] = $object->getBounceDomain();
        $data['tracking_domain'] = $object->getTrackingDomain();
        if ($object->isInitialized('customerId') && null !== $object->getCustomerId()) {
            $data['customer_id'] = $object->getCustomerId();
        }
        $data['sender_domain_validated'] = $object->getSenderDomainValidated();
        if ($object->isInitialized('senderDomainDetails') && null !== $object->getSenderDomainDetails()) {
            $data['sender_domain_details'] = $object->getSenderDomainDetails();
        }
        $data['bounce_domain_validated'] = $object->getBounceDomainValidated();
        if ($object->isInitialized('bounceDomainDetails') && null !== $object->getBounceDomainDetails()) {
            $data['bounce_domain_details'] = $object->getBounceDomainDetails();
        }
        $data['tracking_domain_validated'] = $object->getTrackingDomainValidated();
        if ($object->isInitialized('trackingDomainDetails') && null !== $object->getTrackingDomainDetails()) {
            $data['tracking_domain_details'] = $object->getTrackingDomainDetails();
        }
        $data['default_from_name'] = $object->getDefaultFromName();
        $data['default_from_email'] = $object->getDefaultFromEmail();
        if ($object->isInitialized('espAccountId') && null !== $object->getEspAccountId()) {
            $data['esp_account_id'] = $object->getEspAccountId();
        }
        if ($object->isInitialized('espApiKey') && null !== $object->getEspApiKey()) {
            $data['esp_api_key'] = $object->getEspApiKey();
        }
        $data['esp'] = $object->getEsp();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}