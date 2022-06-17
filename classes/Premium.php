<?php
/*
 328/kcbakery/classes/Membership.php
 */


/**
 * The Premium class creates a Premium object
 * that will hold user input only allotted for
 * premium users
 *
 * This class extends the Membership class
 * @author Cherie Menchaca and Keny Dutton-Gillespie
 * @version 1.0
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