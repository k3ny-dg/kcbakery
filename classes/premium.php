<?php


/**
 * This class represents the Premium class that extends Membership
 */
class Premium extends Membership
{
    /**These are the fields for premium
     * Birthdate
     * @var string
     */
    private $_dob;


    //constructor

    /**
     * This is the constructor for the following
     * Birthdate
     */
    public function __construct()
    {
        $this->_dob = "";

    }

    /**This function gets the dob
     * @return string
     */

    public function getDob(): string
    {
        return $this->_dob;
    }

    /**This function sets the dob
     * @param string $dob
     * @return void
     */
    public function setDob(string $dob): void
    {
        $this->_dob = $dob;
    }

}
