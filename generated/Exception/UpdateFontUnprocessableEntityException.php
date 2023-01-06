<?php

namespace MauticInc\MEGA\OpenAPI\Generated\Exception;

class UpdateFontUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontPatchResponse422
     */
    private $fontsFontPatchResponse422;
    public function __construct(\MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontPatchResponse422 $fontsFontPatchResponse422)
    {
        parent::__construct('Unprocessable Request');
        $this->fontsFontPatchResponse422 = $fontsFontPatchResponse422;
    }
    public function getFontsFontPatchResponse422() : \MauticInc\MEGA\OpenAPI\Generated\Model\FontsFontPatchResponse422
    {
        return $this->fontsFontPatchResponse422;
    }
}