<?php


/**
 * This class represents all members of the Kcbakery form.
 */
class Membership
{

    /**Private fields for the following
     * first, last, age, phone, gender, email, state, seeking,
     * bio
     * @var string
     */

    private $_first;
    private $_last;
    private $_phoneNumber;
    private $_emailAdd;
    private $_location;
    private $_city;


    //constructor

    /**
     * The constructor for the following fields
     * first, last, phone, email, and location
     *
     */
    public function __construct()
    {
        $this->_first = "";
        $this->_last = "";
        $this->_phoneNumber = "";
        $this->_emailAdd = "";
        $this->_location = "";
        $this->_city = "";

    }
    //getters and setters for each

    /**Get the first name for kcbakery
     * @return string
     */

    public function getFirst(): string
    {
        return $this->_first;
    }

    /**Return the first name for kcbakery
     * @param string $first
     */
    public function setFirst(string $first): void
    {
        $this->_first = $first;
    }

    /**Get the last name for kcbakery
     * @return string
     */
    public function getLast(): string
    {
        return $this->_last;
    }

    /**Return the last name for kcbakery
     * @param string $last
     */
    public function setLast(string $last): void
    {
        $this->_last = $last;
    }

    //phoneNumber
    /**Get the phone number for kcbakery
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->_phoneNumber;
    }

    /**Return the phone for dating
     * @param string $phoneNumber
     */
    public function setPhone(string $phoneNumber): void
    {
        $this->_phone = $phoneNumber;
    }

    /**Get the email for kcbakery
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_emailAdd;
    }

    /**Return the email for dating
     * @param string $emailAdd
     */
    public function setEmail(string $emailAdd): void
    {
        $this->_emailAdd = $emailAdd;
    }

    /**This function will get city from kcbakery and
     * @return string
     */
    public function getCity(): string
    {
        return $this->_city;
    }

    /**This function will set city
     * @param string $city
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->_city = $city;
    }

    /**Get the state for dating
     * @return string
     */
    public function getLocation(): string
    {
        return $this->_location;
    }

    /**Return the location for kcbakery
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->_location = $location;
    }


}