<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdatePlanUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansUuidPatchResponse422
     */
    private $plansUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansUuidPatchResponse422 $plansUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansUuidPatchResponse422 = $plansUuidPatchResponse422;
    }
    public function getPlansUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansUuidPatchResponse422
    {
        return $this->plansUuidPatchResponse422;
    }
}