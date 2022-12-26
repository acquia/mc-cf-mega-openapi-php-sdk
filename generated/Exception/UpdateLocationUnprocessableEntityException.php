<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateLocationUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\LocationsLocationPatchResponse422
     */
    private $locationsLocationPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\LocationsLocationPatchResponse422 $locationsLocationPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->locationsLocationPatchResponse422 = $locationsLocationPatchResponse422;
    }
    public function getLocationsLocationPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\LocationsLocationPatchResponse422
    {
        return $this->locationsLocationPatchResponse422;
    }
}