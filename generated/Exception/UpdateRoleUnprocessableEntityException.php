<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateRoleUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidPatchResponse422
     */
    private $rolesUuidPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidPatchResponse422 $rolesUuidPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->rolesUuidPatchResponse422 = $rolesUuidPatchResponse422;
    }
    public function getRolesUuidPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\RolesUuidPatchResponse422
    {
        return $this->rolesUuidPatchResponse422;
    }
}