<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class PostIpPoolsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsPostResponse422
     */
    private $ipPoolsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsPostResponse422 $ipPoolsPostResponse422)
    {
        parent::__construct('Unprocessable Entity');
        $this->ipPoolsPostResponse422 = $ipPoolsPostResponse422;
    }
    public function getIpPoolsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsPostResponse422
    {
        return $this->ipPoolsPostResponse422;
    }
}