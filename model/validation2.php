<?php

/* kcbakery/model/validation.php
* Validate user input from the dating app
*/
//validate name
function validTitle($name)
{
    if ($name=="") {
        return false;
    }
    else if (is_numeric($name)) {
        return false;
    }
    else {
        return true;
    }
}
function validPhoneNumber($phoneNumber)
{
    return strlen($phoneNumber) == 10;
}
//validate email
function validEmailaddr($email)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

//Validate condiments
function validPastry($userPastryArray)  //"mustard", "sarin gas"
{
    $validPastryArray = DataLayer::getPastryItem();

    //Make sure each user selection is in the array of valid options
    foreach($userPastryArray as $userPastry) {
        if (!in_array($userPastry, $validPastryArray)) {
            return false;
        }
    }

    return true;
}
