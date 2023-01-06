<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AttachMultipleRolesToUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPutResponse422
     */
    private $usersUserRolesPutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPutResponse422 $usersUserRolesPutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUserRolesPutResponse422 = $usersUserRolesPutResponse422;
    }
    public function getUsersUserRolesPutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPutResponse422
    {
        return $this->usersUserRolesPutResponse422;
    }
}