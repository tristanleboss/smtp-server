<?php

namespace SamIT\React\Smtp\Auth;

/**
 * Class PlainMethod
 * @package SamIT\React\Smtp\Auth
 */
class PlainMethod
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * PlainMethod constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'PLAIN';
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function decodeToken($token)
    {
        $parts = explode("\000", base64_decode($token));

        $this->username = $parts[1];
        $this->password = $parts[2];

        return $this;
    }

    /**
     * @return bool
     */
    public function check()
    {
        var_dump('check', $this->username, $this->password);

        return true;
    }
}