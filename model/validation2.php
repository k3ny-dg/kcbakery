<?php

/* kcbakery/model/validation.php
* Validate user input from the dating app
*/

class Validation2
{

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

    static function validPhoneNumber($phoneNumber)
    {
        return strlen($phoneNumber) == 10;
    }

//validate email
    static function validEmailaddr($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }


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

