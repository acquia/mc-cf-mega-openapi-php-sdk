<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class GetCustomersUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersGetResponse422
     */
    private $customersGetResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\CustomersGetResponse422 $customersGetResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->customersGetResponse422 = $customersGetResponse422;
    }
    public function getCustomersGetResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\CustomersGetResponse422
    {
        return $this->customersGetResponse422;
    }
}