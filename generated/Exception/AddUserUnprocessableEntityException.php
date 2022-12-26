<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class AddUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostResponse422
     */
    private $usersPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostResponse422 $usersPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersPostResponse422 = $usersPostResponse422;
    }
    public function getUsersPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersPostResponse422
    {
        return $this->usersPostResponse422;
    }
}