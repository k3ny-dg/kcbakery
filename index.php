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
$f3->route('POST|GET /menu', function() {




    $view  = new Template();
    echo $view->render('views/menu.html');
});
$f3->route('POST|GET /sign_up', function($f3) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        var_dump($_POST);

        //Get the data
        //first
        $first = $_POST['first'];
        $f3->set('firstName', $first);

        //require
        $first = isset($_POST['first']) ? $_POST['first'] : "";
        //If data is first name is valid
        //if data is valid
        if (validName($first)) {
            $_SESSION['first'] = $first;
        } else {
            $f3->set('errors["first"]', 'Please enter your first name with letters.');
        }

        //last
        $last = $_POST['last'];
        $f3->set('lastName', $last);

        $last = isset($_POST['last']) ? $_POST['last'] : "";
        if (validName($last)) {
            $_SESSION['last'] = $last;
        } else {
            $f3->set('errors["last"]', 'Please enter your last name with letters.');
        }

        //city
        $city = $_POST['city'];
        $f3->set('city', $city);

        $city = isset($_POST['city']) ? $_POST['city'] : "";
        if (validName($city)) {
            $_SESSION['city'] = $city;
        } else {
            $f3->set('errors["city"]', 'Please enter a valid city with letters.');
        }
        //phone
        $phoneNumber = $_POST['phoneNumber'];
        $f3->set('phoneNumber', $phoneNumber);

        $phone = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : "";
        if (validPhone($phoneNumber)) {
            $_SESSION['phoneNumber'] = $phoneNumber;
        } else {
            $f3->set('errors["phoneNumber"]', 'Please enter your telephone number.');
        }
        //Redirect to order2 route if there are no errors
        if (empty($f3->get('errors'))) {
            header('location: summary');
        }
        $city = $_POST['city'];
        $f3->set('city', $city);
        $_SESSION['city'] = $city;

        $location = $_POST['location'];
        $f3->set('userLocation', $location);
        $_SESSION['location'] = $location;

        $membership = $_POST['membership'];
        $f3->set('userMembership', $membership);
        $_SESSION['membership'] = $membership;

        $upgrade = $_POST['upgrade'];
        $f3->set('userUpgrade', $upgrade);
        $_SESSION['upgrade'] = $upgrade;
    }
    //Add states data to hive
    $f3->set('locations', getLocation());
    $f3->set('memberships', getMembership());
    $f3->set('upgrades', getUpgrade());

    $view  = new Template();
    echo $view->render('views/sign_up.html');
});


// Run fat free
$f3->run();