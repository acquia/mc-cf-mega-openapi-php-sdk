<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BrowseUserAccountUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsGetResponse422
     */
    private $usersUserAccountsGetResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsGetResponse422 $usersUserAccountsGetResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersUserAccountsGetResponse422 = $usersUserAccountsGetResponse422;
    }
    public function getUsersUserAccountsGetResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersUserAccountsGetResponse422
    {
        return $this->usersUserAccountsGetResponse422;
    }
}