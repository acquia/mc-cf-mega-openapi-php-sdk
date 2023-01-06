<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDeleteFeaturePlanUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesBulkDeletePutResponse422
     */
    private $plansPlanFeaturesBulkDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesBulkDeletePutResponse422 $plansPlanFeaturesBulkDeletePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansPlanFeaturesBulkDeletePutResponse422 = $plansPlanFeaturesBulkDeletePutResponse422;
    }
    public function getPlansPlanFeaturesBulkDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPlanFeaturesBulkDeletePutResponse422
    {
        return $this->plansPlanFeaturesBulkDeletePutResponse422;
    }
}