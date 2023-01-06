<?php declare(strict_types=1);

namespace MauticInc\MEGA\OpenAPI\Model;

class ResponseOAuthClientCredentials extends \ArrayObject
{
    /**
     * @var string
     */
    protected $token_type;

    /**
     * @var int
     */
    protected $expires_in;

    /**
     * @var string
     */
    protected $access_token;

    /**
     * @var string
     */
    protected $refresh_token;

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->token_type;
    }

    /**
     * @param string $token_type
     */
    public function setTokenType(string $token_type): void
    {
        $this->token_type = $token_type;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    /**
     * @param int $expires_in
     */
    public function setExpiresIn(int $expires_in): void
    {
        $this->expires_in = $expires_in;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     */
    public function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }

    /**
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refresh_token;
    }

    /**
     * @param string $refresh_token
     */
    public function setRefreshToken(string $refresh_token): void
    {
        $this->refresh_token = $refresh_token;
    }
}