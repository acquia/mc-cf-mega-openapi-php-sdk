<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AttachRoleToUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPatchResponse422
     */
    private $usersUserRolesPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPatchResponse422 $usersUserRolesPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUserRolesPatchResponse422 = $usersUserRolesPatchResponse422;
    }
    public function getUsersUserRolesPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesPatchResponse422
    {
        return $this->usersUserRolesPatchResponse422;
    }
}