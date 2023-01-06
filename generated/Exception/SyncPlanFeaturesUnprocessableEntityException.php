<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class SyncPlanFeaturesUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPutResponse422
     */
    private $plansPlanFeaturesPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPutResponse422 $plansPlanFeaturesPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansPlanFeaturesPutResponse422 = $plansPlanFeaturesPutResponse422;
    }
    public function getPlansPlanFeaturesPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPutResponse422
    {
        return $this->plansPlanFeaturesPutResponse422;
    }
}