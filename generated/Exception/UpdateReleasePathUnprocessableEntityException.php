<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateReleasePathUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidPatchResponse422
     */
    private $releasePathsUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidPatchResponse422 $releasePathsUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->releasePathsUuidPatchResponse422 = $releasePathsUuidPatchResponse422;
    }
    public function getReleasePathsUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidPatchResponse422
    {
        return $this->releasePathsUuidPatchResponse422;
    }
}