<?php
// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Require the autoload file
require_once('vendor/autoload.php');

//Start a session
session_start();
/*
* Author:  Cherie Menchaca & Keny Dutton-Gillespie
* File Name: index.php
* File Description: Controller Page for our Bakery Website (KC Bakery)
*/

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

//Define a summary route
$f3->route('GET|POST /signup_summary', function($f3){
    //var_dump($_SESSION);

    $GLOBALS['con']->signup_summary();

});

//Define a summary route
$f3->route('GET|POST /confirmation', function($f3){
    //var_dump($_SESSION);
    $GLOBALS['con']->confirm();
});

// Run fat free
$f3->run();