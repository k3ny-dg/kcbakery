<?php

/* kcbakery/model/validation.php
* Validate user input from the dating app
*/

class Validation2
{
    /**This function validates the name (first and last) with Title
     * @param $name
     * @return bool
     */
    static function validTitle($name)
    {
        if ($name == "") {
            return false;
        } else if (is_numeric($name)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Validates the phone number
     * Phone number must have 10 digits
     * @param $phoneNumber
     * @return bool
     */
    static function validPhoneNumber($phoneNumber)
    {
        return strlen($phoneNumber) == 10;
    }

    /**
     * Validates email
     * Email must meet the validate email filter params
     * @param $email
     * @return bool
     */

    static function validEmailaddr($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    /**This function valid date of birth
     * @param $dob
     * @return bool
     */
    //valid date of birth


    /**
     * Validates user inputted birthday
     * DOB must match regex pattern
     * @param $dob
     * @return bool
     */

    static function validDob($dob)
    {
        if(preg_match_all("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/"))
        {
            return true;
        }
        return false;
    }


    /**
     * Validates pastry array
     * Ensures there will not be spoofing
     * @param $userPastryArray
     * @return bool
     */
    static function validPastry($userPastryArray)
    {
        $validPastryArray = DataLayer::getPastryItem();

        //Make sure each user selection is in the array of valid options
        foreach ($userPastryArray as $userPastry) {
            if (!in_array($userPastry, $validPastryArray)) {
                return false;
            }
        }
        return true;
    }


    /**
     * Validates donut array
     * Ensures there will not be spoofing
     * @param $userDonutArray
     * @return bool
     */
    static function validDonut($userDonutArray)
    {
        $validDonutArray = DataLayer::getDonutItem();

        //Make sure each user selection is in the array of valid options
        foreach ($userDonutArray as $userDonuts) {
            if (!in_array($userDonuts, $validDonutArray)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Validates sandwich array
     * Ensures there will not be spoofing
     * @param $userSandwichArray
     * @return bool
     */
    static function validSandwiches($userSandwichArray)
    {
        $validSandwichArray = DataLayer::getSandwich();

        //Make sure each user selection is in the array of valid options
        foreach ($userSandwichArray as $userSandwiches) {
            if (!in_array($userSandwiches, $validSandwichArray)) {
                return false;
            }
        }
        return true;
    }


    /**
     * Validates specialty array
     * Ensures there will not be spoofing
     * @param $userSpecialArray
     * @return bool
     */
    static function validSpecialty($userSpecialArray)
    {
        $validSpecialArray = DataLayer::getSpecialty();

        //Make sure each user selection is in the array of valid options
        foreach ($userSpecialArray as $userSpec) {
            if (!in_array($userSpec, $validSpecialArray)) {
                return false;
            }
        }
        return true;
    }
    /**
     * Validates drink array
     * Ensures there will not be spoofing
     * @param $userDrinkArray
     * @return bool
     */
    static function validDrink($userDrinkArray)
    {
        $validDrinkArray = DataLayer::getDrink();

        //Make sure each user selection is in the array of valid options
        foreach ($userDrinkArray as $userDrinks) {
            if (!in_array($userDrinks, $validDrinkArray)) {
                return false;
            }
        }
        return true;
    }
}

