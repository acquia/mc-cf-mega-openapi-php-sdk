<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class EditIpPoolUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidPatchResponse422
     */
    private $ipPoolsUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidPatchResponse422 $ipPoolsUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->ipPoolsUuidPatchResponse422 = $ipPoolsUuidPatchResponse422;
    }
    public function getIpPoolsUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsUuidPatchResponse422
    {
        return $this->ipPoolsUuidPatchResponse422;
    }
}