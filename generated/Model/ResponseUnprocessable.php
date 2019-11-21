<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace MauticInc\MEGA\OpenAPI\Generated\Model;

class ResponseUnprocessable
{
    /**
     * @var ValidationError[]|null
     */
    protected $errors;

    /**
     * @return ValidationError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param ValidationError[]|null $errors
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }
}