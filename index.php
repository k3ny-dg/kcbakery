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
require_once('model/validation2.php');

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
$f3->route('GET|POST /cart', function () {

    $view = new Template();
    echo $view->render('views/cart.html');

});


// Run fat free
$f3->run();