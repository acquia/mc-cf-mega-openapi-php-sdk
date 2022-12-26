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
class BrandingsBrandingPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\BrandingsBrandingPatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\BrandingsBrandingPatchBody';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\BrandingsBrandingPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('primary_color', $data) && $data['primary_color'] !== null) {
            $object->setPrimaryColor($data['primary_color']);
            unset($data['primary_color']);
        }
        elseif (\array_key_exists('primary_color', $data) && $data['primary_color'] === null) {
            $object->setPrimaryColor(null);
        }
        if (\array_key_exists('secondary_color', $data) && $data['secondary_color'] !== null) {
            $object->setSecondaryColor($data['secondary_color']);
            unset($data['secondary_color']);
        }
        elseif (\array_key_exists('secondary_color', $data) && $data['secondary_color'] === null) {
            $object->setSecondaryColor(null);
        }
        if (\array_key_exists('tertiary_color', $data) && $data['tertiary_color'] !== null) {
            $object->setTertiaryColor($data['tertiary_color']);
            unset($data['tertiary_color']);
        }
        elseif (\array_key_exists('tertiary_color', $data) && $data['tertiary_color'] === null) {
            $object->setTertiaryColor(null);
        }
        if (\array_key_exists('header_color', $data) && $data['header_color'] !== null) {
            $object->setHeaderColor($data['header_color']);
            unset($data['header_color']);
        }
        elseif (\array_key_exists('header_color', $data) && $data['header_color'] === null) {
            $object->setHeaderColor(null);
        }
        if (\array_key_exists('branding_color', $data) && $data['branding_color'] !== null) {
            $object->setBrandingColor($data['branding_color']);
            unset($data['branding_color']);
        }
        elseif (\array_key_exists('branding_color', $data) && $data['branding_color'] === null) {
            $object->setBrandingColor(null);
        }
        if (\array_key_exists('heading_font', $data) && $data['heading_font'] !== null) {
            $object->setHeadingFont($data['heading_font']);
            unset($data['heading_font']);
        }
        elseif (\array_key_exists('heading_font', $data) && $data['heading_font'] === null) {
            $object->setHeadingFont(null);
        }
        if (\array_key_exists('body_font', $data) && $data['body_font'] !== null) {
            $object->setBodyFont($data['body_font']);
            unset($data['body_font']);
        }
        elseif (\array_key_exists('body_font', $data) && $data['body_font'] === null) {
            $object->setBodyFont(null);
        }
        if (\array_key_exists('login_logo', $data) && $data['login_logo'] !== null) {
            $object->setLoginLogo($data['login_logo']);
            unset($data['login_logo']);
        }
        elseif (\array_key_exists('login_logo', $data) && $data['login_logo'] === null) {
            $object->setLoginLogo(null);
        }
        if (\array_key_exists('main_logo', $data) && $data['main_logo'] !== null) {
            $object->setMainLogo($data['main_logo']);
            unset($data['main_logo']);
        }
        elseif (\array_key_exists('main_logo', $data) && $data['main_logo'] === null) {
            $object->setMainLogo(null);
        }
        if (\array_key_exists('mascot', $data) && $data['mascot'] !== null) {
            $object->setMascot($data['mascot']);
            unset($data['mascot']);
        }
        elseif (\array_key_exists('mascot', $data) && $data['mascot'] === null) {
            $object->setMascot(null);
        }
        if (\array_key_exists('favicon', $data) && $data['favicon'] !== null) {
            $object->setFavicon($data['favicon']);
            unset($data['favicon']);
        }
        elseif (\array_key_exists('favicon', $data) && $data['favicon'] === null) {
            $object->setFavicon(null);
        }
        if (\array_key_exists('app_name', $data) && $data['app_name'] !== null) {
            $object->setAppName($data['app_name']);
            unset($data['app_name']);
        }
        elseif (\array_key_exists('app_name', $data) && $data['app_name'] === null) {
            $object->setAppName(null);
        }
        if (\array_key_exists('auxilary_color', $data) && $data['auxilary_color'] !== null) {
            $object->setAuxilaryColor($data['auxilary_color']);
            unset($data['auxilary_color']);
        }
        elseif (\array_key_exists('auxilary_color', $data) && $data['auxilary_color'] === null) {
            $object->setAuxilaryColor(null);
        }
        if (\array_key_exists('account_uuid', $data) && $data['account_uuid'] !== null) {
            $object->setAccountUuid($data['account_uuid']);
            unset($data['account_uuid']);
        }
        elseif (\array_key_exists('account_uuid', $data) && $data['account_uuid'] === null) {
            $object->setAccountUuid(null);
        }
        if (\array_key_exists('instance_uuid', $data) && $data['instance_uuid'] !== null) {
            $object->setInstanceUuid($data['instance_uuid']);
            unset($data['instance_uuid']);
        }
        elseif (\array_key_exists('instance_uuid', $data) && $data['instance_uuid'] === null) {
            $object->setInstanceUuid(null);
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
        if ($object->isInitialized('primaryColor') && null !== $object->getPrimaryColor()) {
            $data['primary_color'] = $object->getPrimaryColor();
        }
        if ($object->isInitialized('secondaryColor') && null !== $object->getSecondaryColor()) {
            $data['secondary_color'] = $object->getSecondaryColor();
        }
        if ($object->isInitialized('tertiaryColor') && null !== $object->getTertiaryColor()) {
            $data['tertiary_color'] = $object->getTertiaryColor();
        }
        if ($object->isInitialized('headerColor') && null !== $object->getHeaderColor()) {
            $data['header_color'] = $object->getHeaderColor();
        }
        if ($object->isInitialized('brandingColor') && null !== $object->getBrandingColor()) {
            $data['branding_color'] = $object->getBrandingColor();
        }
        if ($object->isInitialized('headingFont') && null !== $object->getHeadingFont()) {
            $data['heading_font'] = $object->getHeadingFont();
        }
        if ($object->isInitialized('bodyFont') && null !== $object->getBodyFont()) {
            $data['body_font'] = $object->getBodyFont();
        }
        if ($object->isInitialized('loginLogo') && null !== $object->getLoginLogo()) {
            $data['login_logo'] = $object->getLoginLogo();
        }
        if ($object->isInitialized('mainLogo') && null !== $object->getMainLogo()) {
            $data['main_logo'] = $object->getMainLogo();
        }
        if ($object->isInitialized('mascot') && null !== $object->getMascot()) {
            $data['mascot'] = $object->getMascot();
        }
        if ($object->isInitialized('favicon') && null !== $object->getFavicon()) {
            $data['favicon'] = $object->getFavicon();
        }
        if ($object->isInitialized('appName') && null !== $object->getAppName()) {
            $data['app_name'] = $object->getAppName();
        }
        if ($object->isInitialized('auxilaryColor') && null !== $object->getAuxilaryColor()) {
            $data['auxilary_color'] = $object->getAuxilaryColor();
        }
        if ($object->isInitialized('accountUuid') && null !== $object->getAccountUuid()) {
            $data['account_uuid'] = $object->getAccountUuid();
        }
        if ($object->isInitialized('instanceUuid') && null !== $object->getInstanceUuid()) {
            $data['instance_uuid'] = $object->getInstanceUuid();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}