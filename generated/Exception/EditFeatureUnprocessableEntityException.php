<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class EditFeatureUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchResponse422
     */
    private $featuresUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchResponse422 $featuresUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->featuresUuidPatchResponse422 = $featuresUuidPatchResponse422;
    }
    public function getFeaturesUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesUuidPatchResponse422
    {
        return $this->featuresUuidPatchResponse422;
    }
}