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
class MailTemplatesUuidPatchResponse422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\MailTemplatesUuidPatchResponse422Errors';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'MauticInc\\MEGA\\OpenAPI\\Generated\\Model\\MailTemplatesUuidPatchResponse422Errors';
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
        $object = new \MauticInc\MEGA\OpenAPI\Generated\Model\MailTemplatesUuidPatchResponse422Errors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $values = array();
            foreach ($data['subject'] as $value) {
                $values[] = $value;
            }
            $object->setSubject($values);
            unset($data['subject']);
        }
        elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('html_template', $data) && $data['html_template'] !== null) {
            $values_1 = array();
            foreach ($data['html_template'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setHtmlTemplate($values_1);
            unset($data['html_template']);
        }
        elseif (\array_key_exists('html_template', $data) && $data['html_template'] === null) {
            $object->setHtmlTemplate(null);
        }
        if (\array_key_exists('mailable', $data) && $data['mailable'] !== null) {
            $values_2 = array();
            foreach ($data['mailable'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setMailable($values_2);
            unset($data['mailable']);
        }
        elseif (\array_key_exists('mailable', $data) && $data['mailable'] === null) {
            $object->setMailable(null);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('subject') && null !== $object->getSubject()) {
            $values = array();
            foreach ($object->getSubject() as $value) {
                $values[] = $value;
            }
            $data['subject'] = $values;
        }
        if ($object->isInitialized('htmlTemplate') && null !== $object->getHtmlTemplate()) {
            $values_1 = array();
            foreach ($object->getHtmlTemplate() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['html_template'] = $values_1;
        }
        if ($object->isInitialized('mailable') && null !== $object->getMailable()) {
            $values_2 = array();
            foreach ($object->getMailable() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['mailable'] = $values_2;
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}