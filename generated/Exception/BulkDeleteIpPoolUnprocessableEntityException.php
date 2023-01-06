<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDeleteIpPoolUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsBulkDeletePutResponse422
     */
    private $ipPoolsBulkDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsBulkDeletePutResponse422 $ipPoolsBulkDeletePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->ipPoolsBulkDeletePutResponse422 = $ipPoolsBulkDeletePutResponse422;
    }
    public function getIpPoolsBulkDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\IpPoolsBulkDeletePutResponse422
    {
        return $this->ipPoolsBulkDeletePutResponse422;
    }
}