<?php
class Login
{
    private $_username;
    private $_password;

    function __construct()
    {
        $_username = "";
        $_password = "";
    }

    /**
     * Return username
     * @return string
     */

    public function getUsername(): string
    {
        return $this->_username;
    }

    /**Sets username
     * @param $username
     * @return string
     */
    public function setUsername($username): string
    {

        return $this->_username = $username;
    }

    /**Return password
     * @return string
     */
    public function getPassword(): string
    {
        return $this->_password;
    }

    /**Set password
     * @param $password
     * @return string
     */
    public function setPassword($password): string
    {

        return $this->_password = $password;
    }
}