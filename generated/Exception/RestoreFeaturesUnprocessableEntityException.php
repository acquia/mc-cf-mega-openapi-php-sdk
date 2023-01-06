<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class RestoreFeaturesUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesRestorePutResponse422
     */
    private $featuresRestorePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesRestorePutResponse422 $featuresRestorePutResponse422)
    {
        parent::__construct('Unprocessable Entity (WebDAV)');
        $this->featuresRestorePutResponse422 = $featuresRestorePutResponse422;
    }
    public function getFeaturesRestorePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesRestorePutResponse422
    {
        return $this->featuresRestorePutResponse422;
    }
}