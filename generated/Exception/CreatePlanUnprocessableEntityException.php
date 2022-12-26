<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreatePlanUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPostResponse422
     */
    private $plansPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\PlansPostResponse422 $plansPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->plansPostResponse422 = $plansPostResponse422;
    }
    public function getPlansPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\PlansPostResponse422
    {
        return $this->plansPostResponse422;
    }
}