<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AttachPlanFeatureUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPatchResponse422
     */
    private $plansPlanFeaturesPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPatchResponse422 $plansPlanFeaturesPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansPlanFeaturesPatchResponse422 = $plansPlanFeaturesPatchResponse422;
    }
    public function getPlansPlanFeaturesPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesPatchResponse422
    {
        return $this->plansPlanFeaturesPatchResponse422;
    }
}