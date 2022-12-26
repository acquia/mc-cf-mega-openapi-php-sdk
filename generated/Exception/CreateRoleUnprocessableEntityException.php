<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreateRoleUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\RolesPostResponse422
     */
    private $rolesPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\RolesPostResponse422 $rolesPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->rolesPostResponse422 = $rolesPostResponse422;
    }
    public function getRolesPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\RolesPostResponse422
    {
        return $this->rolesPostResponse422;
    }
}