<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AddFeatureUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesPostResponse422
     */
    private $featuresPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesPostResponse422 $featuresPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->featuresPostResponse422 = $featuresPostResponse422;
    }
    public function getFeaturesPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesPostResponse422
    {
        return $this->featuresPostResponse422;
    }
}