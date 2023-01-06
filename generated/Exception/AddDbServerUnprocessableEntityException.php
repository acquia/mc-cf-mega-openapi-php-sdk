<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AddDbServerUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersPostResponse422
     */
    private $dbServersPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\DbServersPostResponse422 $dbServersPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->dbServersPostResponse422 = $dbServersPostResponse422;
    }
    public function getDbServersPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\DbServersPostResponse422
    {
        return $this->dbServersPostResponse422;
    }
}