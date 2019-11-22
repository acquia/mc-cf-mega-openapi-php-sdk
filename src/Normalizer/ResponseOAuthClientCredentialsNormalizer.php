<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI\Normalizer;

use MauticInc\MEGA\OpenAPI\Model\ResponseOAuthClientCredentials;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ResponseOAuthClientCredentialsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === ResponseOAuthClientCredentials::class;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === ResponseOAuthClientCredentials::class;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }

        $object = new ResponseOAuthClientCredentials();

        if (property_exists($data, 'token_type') && $data->token_type !== null) {
            $object->setTokenType($data->token_type);
        }

        if (property_exists($data, 'expires_in') && $data->expires_in !== null) {
            $object->setExpiresIn($data->expires_in);
        }

        if (property_exists($data, 'access_token') && $data->access_token !== null) {
            $object->setAccessToken($data->access_token);
        }

        if (property_exists($data, 'refresh_token') && $data->refresh_token !== null) {
            $object->setRefreshToken($data->refresh_token);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTokenType()) {
            $data->token_type = $object->getTokenType();
        }
        if (null !== $object->getExpiresIn()) {
            $data->expires_in = $object->getExpiresIn();
        }
        if (null !== $object->getAccessToken()) {
            $data->access_token = $object->getAccessToken();
        }
        if (null !== $object->getRefreshToken()) {
            $data->refres_token = $object->getRefreshToken();
        }

        return $data;
    }
}
