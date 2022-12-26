<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreateLocationUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\LocationsPostResponse422
     */
    private $locationsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\LocationsPostResponse422 $locationsPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->locationsPostResponse422 = $locationsPostResponse422;
    }
    public function getLocationsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\LocationsPostResponse422
    {
        return $this->locationsPostResponse422;
    }
}