<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

/*
* Author:  Cherie Menchaca & Keny Dutton-Gillespie
* File Name: index.php
* File Description: Controller Page for our Bakery Website (KC Bakery)
*/

// Require the autoload file
require_once('vendor/autoload.php');
require_once('model/data-layer2.php');
require_once ('model/validation2.php');

// Create an instance of the Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /',function() {

    $view = new Template();
    echo $view->render('views/home.html');

});

// Define a menu route
$f3->route('POST|GET /menu', function($f3) {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $pastryItems = "";
    if (empty($_POST['pastryItem'])) {
        $pastryItems = "no pastries selected";
    } else {
        $pastryItem = implode(", ", $_POST['pastryItem']);

    }
    $_SESSION['pastryItems'] = $pastryItems;

    //Redirect to summary route if there are no errors
    if (empty($f3->get('errors'))) {
        header("location: cart");
    }
}
    $f3->set('pastry', getPastryItem());
    $f3->set('pastryImage', getPastryImage());


    $view  = new Template();
    echo $view->render('views/menu.html');
});

$f3->route('POST|GET /sign_up', function($f3) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        //Get the data
        //first
        $first = $_POST['first'];
        $f3->set('firstName', $first);

        //require
//        $first = isset($_POST['first']) ? $_POST['first'] : "";
//        //If data is first name is valid
//        //if data is valid
//        if (validTitle($first)) {
//            $_SESSION['first'] = $first;
//        } else {
//            $f3->set('errors["first"]', 'Please enter your first name with letters.');
//        }

        //last
        $last = $_POST['last'];
        $f3->set('lastName', $last);

//        $last = isset($_POST['last']) ? $_POST['last'] : "";
//        if (validTitle($last)) {
//            $_SESSION['last'] = $last;
//        } else {
//            $f3->set('errors["last"]', 'Please enter your last name with letters.');
//        }

        //city
        $city = $_POST['city'];
        $f3->set('city', $city);

//

        //phone
        $phoneNumber = $_POST['phoneNumber'];
        $f3->set('phoneNumber', $phoneNumber);

//        $phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : "";
//        if (validPhoneNumber($phoneNumber)) {
//            $_SESSION['phoneNumber'] = $phoneNumber;
//        } else {
//            $f3->set('errors["phoneNumber"]', 'Please enter your telephone number.');
//        }

        //email
        $emailAdd = $_POST['emailAdd'];
        $f3->set('emailAdd', $emailAdd);
        $emailAdd = isset($_POST['emailAdd']) ? $_POST['emailAdd'] : "";
//        if (validEmailaddr($emailAdd)) {
//            $_SESSION['emailAdd'] = $emailAdd;
//        } else {
//            $f3->set('errors["emailAdd"]', 'Please enter a valid email.');
//        }
        //Redirect to order2 route if there are no errors
//        if (empty($f3->get('errors'))) {
//            header('location: summary');
//        }
        $city = $_POST['city'];
        $f3->set('city', $city);
        $_SESSION['city'] = $city;

        $location = $_POST['location'];
        $f3->set('userLocation', $location);
        $_SESSION['location'] = $location;

        $membership = $_POST['membership'];
        $f3->set('userMembership', $membership);
        $_SESSION['membership'] = $membership;


    }
    //Add states data to hive
    $f3->set('locations', getLocation());
    $f3->set('memberships', getMembership());


    $view  = new Template();
    echo $view->render('views/sign_up.html');
});


// Run fat free
$f3->run();