<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteReleasePathUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidDeleteResponse422
     */
    private $releasePathsUuidDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidDeleteResponse422 $releasePathsUuidDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->releasePathsUuidDeleteResponse422 = $releasePathsUuidDeleteResponse422;
    }
    public function getReleasePathsUuidDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsUuidDeleteResponse422
    {
        return $this->releasePathsUuidDeleteResponse422;
    }
}