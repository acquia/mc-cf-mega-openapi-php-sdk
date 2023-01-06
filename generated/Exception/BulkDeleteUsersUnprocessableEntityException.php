<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class BulkDeleteUsersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\UsersBulkDeletePutResponse422
     */
    private $usersBulkDeletePutResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\UsersBulkDeletePutResponse422 $usersBulkDeletePutResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->usersBulkDeletePutResponse422 = $usersBulkDeletePutResponse422;
    }
    public function getUsersBulkDeletePutResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\UsersBulkDeletePutResponse422
    {
        return $this->usersBulkDeletePutResponse422;
    }
}