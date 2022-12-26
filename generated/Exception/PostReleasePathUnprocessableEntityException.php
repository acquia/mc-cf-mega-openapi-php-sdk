<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class PostReleasePathUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsPostResponse422
     */
    private $releasePathsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsPostResponse422 $releasePathsPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->releasePathsPostResponse422 = $releasePathsPostResponse422;
    }
    public function getReleasePathsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\ReleasePathsPostResponse422
    {
        return $this->releasePathsPostResponse422;
    }
}