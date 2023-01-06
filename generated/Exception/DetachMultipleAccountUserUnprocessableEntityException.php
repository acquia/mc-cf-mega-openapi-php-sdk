<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DetachMultipleAccountUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsBulkDetachPutResponse422
     */
    private $usersUserAccountsBulkDetachPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsBulkDetachPutResponse422 $usersUserAccountsBulkDetachPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUserAccountsBulkDetachPutResponse422 = $usersUserAccountsBulkDetachPutResponse422;
    }
    public function getUsersUserAccountsBulkDetachPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsBulkDetachPutResponse422
    {
        return $this->usersUserAccountsBulkDetachPutResponse422;
    }
}