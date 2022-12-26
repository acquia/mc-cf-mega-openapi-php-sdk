<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteFeaturePlanUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesFeatureDeleteResponse422
     */
    private $plansPlanFeaturesFeatureDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesFeatureDeleteResponse422 $plansPlanFeaturesFeatureDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansPlanFeaturesFeatureDeleteResponse422 = $plansPlanFeaturesFeatureDeleteResponse422;
    }
    public function getPlansPlanFeaturesFeatureDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesFeatureDeleteResponse422
    {
        return $this->plansPlanFeaturesFeatureDeleteResponse422;
    }
}