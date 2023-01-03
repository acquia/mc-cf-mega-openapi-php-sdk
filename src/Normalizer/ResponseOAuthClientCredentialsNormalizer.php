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
        $object = new ResponseOAuthClientCredentials();

        if (null === $data || false === \is_array($data)) {
            return $object;
        }

        if (\array_key_exists('token_type', $data) && $data['token_type'] !== null) {
            $object->setTokenType($data['token_type']);
            unset($data['token_type']);
        }

        if (\array_key_exists('expires_in', $data) && $data['expires_in'] !== null) {
            $object->setExpiresIn($data['expires_in']);
            unset($data['expires_in']);
        }

        if (\array_key_exists('access_token', $data) && $data['access_token'] !== null) {
            $object->setAccessToken($data['access_token']);
            unset($data['access_token']);
        }

        if (\array_key_exists('refresh_token', $data) && $data['refresh_token'] !== null) {
            $object->setRefreshToken($data['refresh_token']);
            unset($data['refresh_token']);
        }

        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = array();
        $data['token_type'] = $object->getTokenType();
        $data['expires_in'] = $object->getExpiresIn();
        $data['access_token'] = $object->getAccessToken();
        $data['refresh_token'] = $object->getRefreshToken();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
