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

    /**This function will getFirst name
     * @return string
     */
    public function getFirst(): string
    {
        return $this->_first;
    }

    /**This function will setFirst name
     * @param string $first
     */
    public function setFirst(string $first): void
    {
        $this->_first = $first;
    }

    /**This function will getLast name
     * @return string
     */
    public function getLast(): string
    {
        return $this->_last;
    }

    /**This function will setLast name
     * @param string $last
     */
    public function setLast(string $last): void
    {
        $this->_last = $last;
    }

    /**This function will get address
     * @return string
     */
    public function getAdd(): string
    {
        return $this->_add;
    }

    /**This function will set the address
     * @param string $add
     */
    public function setAdd(string $add): void
    {
        $this->_add = $add;
    }

    /**This function will getCity
     * @return string
     */
    public function getCity(): string
    {
        return $this->_city;
    }

    /**This function will setCity
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->_city = $city;
    }

    /**This function will getPhoneNumber
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->_phoneNumber;
    }

    /**This function will setPhoneNumber
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->_phoneNumber = $phoneNumber;
    }

    /**This function will getLocation
     * @return string
     */
    public function getLocation(): string
    {
        return $this->_location;
    }

    /**This function will setLocation
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->_location = $location;
    }

    /**This function will getEmail
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**This function will setEmail
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**This function will getMembership
     * @return string
     */
    public function getMembership(): string
    {
        return $this->_membership;
    }

    /**This function will setMembership
     * @param string $membership
     */
    public function setMembership(string $membership): void
    {
        $this->_membership = $membership;
    }

    /**This function will getUser
     * @return string
     */
    public function getUser(): string
    {
        return $this->_user;
    }

    /**This function will setUser
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->_user = $user;
    }

    /**This function will getPassword
     * @return string
     */
    public function getPass(): string
    {
        return $this->_pass;
    }

    /**This function will setPassword
     * @param string $pass
     */
    public function setPass(string $pass): void
    {
        $this->_pass = $pass;
    }














}