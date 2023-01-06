<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteDatabasePreconditionFailedException extends PreconditionFailedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidDeleteResponse412
     */
    private $dbServersUuidDeleteResponse412;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidDeleteResponse412 $dbServersUuidDeleteResponse412)
    {
        parent::__construct('Precondition Failed');
        $this->dbServersUuidDeleteResponse412 = $dbServersUuidDeleteResponse412;
    }
    public function getDbServersUuidDeleteResponse412() : \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersUuidDeleteResponse412
    {
        return $this->dbServersUuidDeleteResponse412;
    }
}