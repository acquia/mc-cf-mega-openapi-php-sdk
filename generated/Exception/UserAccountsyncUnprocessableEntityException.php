<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UserAccountsyncUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsPutResponse422
     */
    private $usersUserAccountsPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsPutResponse422 $usersUserAccountsPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUserAccountsPutResponse422 = $usersUserAccountsPutResponse422;
    }
    public function getUsersUserAccountsPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsPutResponse422
    {
        return $this->usersUserAccountsPutResponse422;
    }
}