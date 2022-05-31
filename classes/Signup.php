<?php
class Signup{

    private $_first;
    private $_last;
    private $_add;
    private $_city;
    private $_phoneNumber;
    private $_location;
    private $_email;
    private $_membership;
    private $_user;
    private $_pass;

    /**
     * @param $_first
     * @param $_last
     * @param $_add
     * @param $_city
     * @param $_phoneNumber
     * @param $_location
     * @param $_email
     * @param $_membership
     * @param $_user
     * @param $_pass
     */
    //constructor
    public function __construct(){
        $this->_first = "";
        $this->_last = "";
        $this->_add = "";
        $this->_city = "";
        $this->_phoneNumber = "";
        $this->_location = "";
        $this->_email = "";
        $this->_membership = "";
        $this->_user = "";
        $this->_pass = "";

    }

    /**
     * @return string
     */
    public function getFirst(): string
    {
        return $this->_first;
    }

    /**
     * @param string $first
     */
    public function setFirst(string $first): void
    {
        $this->_first = $first;
    }

    /**
     * @return string
     */
    public function getLast(): string
    {
        return $this->_last;
    }

    /**
     * @param string $last
     */
    public function setLast(string $last): void
    {
        $this->_last = $last;
    }

    /**
     * @return string
     */
    public function getAdd(): string
    {
        return $this->_add;
    }

    /**
     * @param string $add
     */
    public function setAdd(string $add): void
    {
        $this->_add = $add;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->_city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->_city = $city;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->_phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->_phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->_location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->_location = $location;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function getMembership(): string
    {
        return $this->_membership;
    }

    /**
     * @param string $membership
     */
    public function setMembership(string $membership): void
    {
        $this->_membership = $membership;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->_user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->_user = $user;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->_pass;
    }

    /**
     * @param string $pass
     */
    public function setPass(string $pass): void
    {
        $this->_pass = $pass;
    }














}