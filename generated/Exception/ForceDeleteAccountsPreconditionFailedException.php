<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class ForceDeleteAccountsPreconditionFailedException extends PreconditionFailedException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutResponse412
     */
    private $accountsForceDeletePutResponse412;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutResponse412 $accountsForceDeletePutResponse412)
    {
        parent::__construct('Precondition Failed');
        $this->accountsForceDeletePutResponse412 = $accountsForceDeletePutResponse412;
    }
    public function getAccountsForceDeletePutResponse412() : \MauticInc\MEGA\OpenAPI\Generated\Model\AccountsForceDeletePutResponse412
    {
        return $this->accountsForceDeletePutResponse412;
    }
}