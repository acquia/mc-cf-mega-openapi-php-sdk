<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDeleteFeatureUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesBulkDeletePutResponse422
     */
    private $featuresBulkDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesBulkDeletePutResponse422 $featuresBulkDeletePutResponse422)
    {
        parent::__construct('Unprocessable Entity (WebDAV)');
        $this->featuresBulkDeletePutResponse422 = $featuresBulkDeletePutResponse422;
    }
    public function getFeaturesBulkDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FeaturesBulkDeletePutResponse422
    {
        return $this->featuresBulkDeletePutResponse422;
    }
}