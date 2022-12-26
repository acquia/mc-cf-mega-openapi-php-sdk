<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class ForceDeleteFeaturesUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesForceDeletePutResponse422
     */
    private $featuresForceDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesForceDeletePutResponse422 $featuresForceDeletePutResponse422)
    {
        parent::__construct('Unprocessable Entity (WebDAV)');
        $this->featuresForceDeletePutResponse422 = $featuresForceDeletePutResponse422;
    }
    public function getFeaturesForceDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesForceDeletePutResponse422
    {
        return $this->featuresForceDeletePutResponse422;
    }
}