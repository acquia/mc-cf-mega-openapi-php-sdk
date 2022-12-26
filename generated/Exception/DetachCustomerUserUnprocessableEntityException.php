<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class DetachCustomerUserUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersUserDeleteResponse422
     */
    private $customersCustomerUsersUserDeleteResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersUserDeleteResponse422 $customersCustomerUsersUserDeleteResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersCustomerUsersUserDeleteResponse422 = $customersCustomerUsersUserDeleteResponse422;
    }
    public function getCustomersCustomerUsersUserDeleteResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersCustomerUsersUserDeleteResponse422
    {
        return $this->customersCustomerUsersUserDeleteResponse422;
    }
}