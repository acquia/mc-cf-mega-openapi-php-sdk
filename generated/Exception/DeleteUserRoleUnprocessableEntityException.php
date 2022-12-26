<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DeleteUserRoleUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesRoleDeleteResponse422
     */
    private $usersUserRolesRoleDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesRoleDeleteResponse422 $usersUserRolesRoleDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUserRolesRoleDeleteResponse422 = $usersUserRolesRoleDeleteResponse422;
    }
    public function getUsersUserRolesRoleDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserRolesRoleDeleteResponse422
    {
        return $this->usersUserRolesRoleDeleteResponse422;
    }
}