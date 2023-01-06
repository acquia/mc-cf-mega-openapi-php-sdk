<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDeletePlansUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPutResponse422
     */
    private $plansPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPutResponse422 $plansPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansPutResponse422 = $plansPutResponse422;
    }
    public function getPlansPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPutResponse422
    {
        return $this->plansPutResponse422;
    }
}