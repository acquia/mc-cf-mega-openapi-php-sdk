<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteDatabaseUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidDeleteResponse422
     */
    private $dbServersUuidDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidDeleteResponse422 $dbServersUuidDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->dbServersUuidDeleteResponse422 = $dbServersUuidDeleteResponse422;
    }
    public function getDbServersUuidDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidDeleteResponse422
    {
        return $this->dbServersUuidDeleteResponse422;
    }
}