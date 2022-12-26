<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class EditUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidPatchResponse422
     */
    private $usersUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidPatchResponse422 $usersUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUuidPatchResponse422 = $usersUuidPatchResponse422;
    }
    public function getUsersUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUuidPatchResponse422
    {
        return $this->usersUuidPatchResponse422;
    }
}