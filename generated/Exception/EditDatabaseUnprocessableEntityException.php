<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class EditDatabaseUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchResponse422
     */
    private $dbServersUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchResponse422 $dbServersUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->dbServersUuidPatchResponse422 = $dbServersUuidPatchResponse422;
    }
    public function getDbServersUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidPatchResponse422
    {
        return $this->dbServersUuidPatchResponse422;
    }
}