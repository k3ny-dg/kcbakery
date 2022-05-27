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
