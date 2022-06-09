<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Require the autoload file
require_once('vendor/autoload.php');
/*
* Author:  Cherie Menchaca & Keny Dutton-Gillespie
* File Name: index.php
* File Description: Controller Page for our Bakery Website (KC Bakery)
*/

// Require the autoload file
require_once('vendor/autoload.php');

//Start a session
session_start();

//Test dataLayer class
$dataLayer = new DataLayer();
// Create an instance of the Base class
$f3 = Base::instance();

$con = new Controller($f3);

// Define a default route
$f3->route('GET /', function () {

    $GLOBALS['con']->home();

});

// Define a menu route
$f3->route('POST|GET /menu', function ($f3) {

    $GLOBALS['con']->menu();
});

$f3->route('POST|GET /sign_up', function ($f3) {
  $GLOBALS['con']->signup();
});

// Define a default route
$f3->route('GET|POST /cart', function ($f3) {
    $GLOBALS['con']->cart();
});

    /*
        //require
        $first = isset($_POST['first']) ? $_POST['first'] : "";
        //If data is first name is valid
        //if data is valid
        if (validTitle($first)) {
            $_SESSION['first'] = $first;
        } else {
            $f3->set('errors["first"]', 'Please enter your first name with letters.');
        }

        //last
        $last = $_POST['last'];
        $f3->set('lastName', $last);

        $last = isset($_POST['last']) ? $_POST['last'] : "";
        if (validTitle($last)) {
            $_SESSION['last'] = $last;
        } else {
            $f3->set('errors["last"]', 'Please enter your last name with letters.');
        }

        //city
        $city = $_POST['city'];
        $f3->set('city', $city);



        //phone
        $phoneNumber = $_POST['phoneNumber'];
        $f3->set('phoneNumber', $phoneNumber);

        $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : "";
        if (validPhoneNumber($phoneNumber)) {
            $_SESSION['phoneNumber'] = $phoneNumber;
        } else {
            $f3->set('errors["phoneNumber"]', 'Please enter your telephone number.');
        }

        //email
        $emailAdd = $_POST['emailAdd'];
        $f3->set('emailAdd', $emailAdd);
        $emailAdd = isset($_POST['emailAdd']) ? $_POST['emailAdd'] : "";
        if (validEmailaddr($emailAdd)) {
            $_SESSION['emailAdd'] = $emailAdd;
        } else {
            $f3->set('errors["emailAdd"]', 'Please enter a valid email.');
        }
        //Redirect to order2 route if there are no errors
        if (empty($f3->get('errors'))) {
            header('location: summary');
        }
        $add = $_POST['add'];
        $f3->set('add', $add);
        $_SESSION['add'] = $add;

        $city = $_POST['city'];
        $f3->set('city', $city);
        $_SESSION['city'] = $city;

        $location = $_POST['location'];
        $f3->set('userLocation', $location);
        $_SESSION['location'] = $location;

        $membership = $_POST['membership'];
        $f3->set('userMembership', $membership);
        $_SESSION['membership'] = $membership;



    //Add states data to hive
    $f3->set('locations', getLocation());
    $f3->set('memberships', getMembership());


    $view  = new Template();
    echo $view->render('views/sign_up.html');

    $view = new Template();
    echo $view->render('views/cart.html');

}
  */

//Define a summary route
$f3->route('GET|POST /signup_summary', function($f3){
    //var_dump($_SESSION);

    $GLOBALS['con']->signup_summary();

});

// Run fat free
$f3->run();