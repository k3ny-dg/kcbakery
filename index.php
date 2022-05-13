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


// Run fat free
$f3->run();