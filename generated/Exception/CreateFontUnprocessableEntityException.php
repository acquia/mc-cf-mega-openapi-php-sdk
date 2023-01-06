<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class CreateFontUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostResponse422
     */
    private $fontsPostResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostResponse422 $fontsPostResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->fontsPostResponse422 = $fontsPostResponse422;
    }
    public function getFontsPostResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FontsPostResponse422
    {
        return $this->fontsPostResponse422;
    }
}