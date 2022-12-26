<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class GetFontsUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FontsGetResponse422
     */
    private $fontsGetResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FontsGetResponse422 $fontsGetResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->fontsGetResponse422 = $fontsGetResponse422;
    }
    public function getFontsGetResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FontsGetResponse422
    {
        return $this->fontsGetResponse422;
    }
}