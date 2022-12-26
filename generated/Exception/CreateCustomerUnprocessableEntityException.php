<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreateCustomerUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostResponse422
     */
    private $customersPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostResponse422 $customersPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersPostResponse422 = $customersPostResponse422;
    }
    public function getCustomersPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersPostResponse422
    {
        return $this->customersPostResponse422;
    }
}