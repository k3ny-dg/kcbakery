<?php

/*
 328/kcbakery/controllers/controllers.php
 */

class Controller
{

    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function menu()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $pastries = "";

            // Pastries are not required
            if (empty($_POST['pastries'])) {
                $pastries = "none selected";
            }
            // User selected pastries
            else {

                // Get pastries from post array
                $userPastries = $_POST['pastries'];

                // If pastries are valid, convert to string
                if (Validation::validPastry($userPastries)) {
                    $pastries = implode(", ", $userPastries);
                }
                else {
                    $this->_f3->set('errors["pastry"]', 'You spoofed me!');
                }
            }

            // DONUTS

            $donuts = "";

            // Condiments are not required
            if (empty($_POST['donuts'])) {
                $donuts = "none selected";
            }
            // User selected condiments
            else {

                // Get condiments from post array
                $userDonuts = $_POST['donuts'];

                // If condiments are valid, convert to string
                if (Validation::validDonuts($userDonuts)) {
                    $donuts = implode(", ", $userDonuts);
                }
                else {
                    $this->_f3->set('errors["donut"]', 'You spoofed me!');
                }
            }

            // SANDWICHES

            $sandwiches = "";

            // Condiments are not required
            if (empty($_POST['sandwiches'])) {
                $sandwiches = "none selected";
            }
            // User selected condiments
            else {

                // Get condiments from post array
                $userSandwiches = $_POST['sandwiches'];

                // If condiments are valid, convert to string
                if (Validation::validSandwiches($userSandwiches)) {
                    $sandwiches = implode(", ", $userSandwiches);
                }
                else {
                    $this->_f3->set('errors["sandwich"]', 'You spoofed me!');
                }
            }

            //SPECIALTY

            $specialtyItems = "";

            // Condiments are not required
            if (empty($_POST['specialtyItems'])) {
                $specialtyItems = "none selected";
            }
            // User selected condiments
            else {
                // Get condiments from post array
                $userSpec = $_POST['specialtyItems'];

                // If condiments are valid, convert to string
                if (Validation::validSpecialty($userSpec)) {
                    $specialtyItems = implode(", ", $userSpec);
                }
                else {
                    $this->_f3->set('errors["specialty"]', 'You spoofed me!');
                }
            }

            // DRINKS

            $drinks = "";

            // Condiments are not required
            if (empty($_POST['drinks'])) {
                $drinks = "none selected";
            }
            // User selected condiments
            else {

                // Get condiments from post array
                $userDrinks = $_POST['drinks'];

                // If condiments are valid, convert to string
                if (Validation::validDrink($userDrinks)) {
                    $drinks = implode(", ", $userDrinks);
                }
                else {
                    $this->_f3->set('errors["drink"]', 'You spoofed me!');
                }
            }

            //If there are no errors...
            if (empty($this->_f3->get('errors'))) {

                //Redirect
                header('location: cart');
            }
        }
        $this->_f3->set('pastry', DataLayer::getPastryItem());
        $this->_f3->set('pastryImage', DataLayer::getPastryImage());
        $this->_f3->set('donut', DataLayer::getDonutItem());
        $this->_f3->set('donutImage', DataLayer::getDonutImage());
        $this->_f3->set('sandwich', DataLayer::getSandwich());
        $this->_f3->set('sandwichImage', DataLayer::getSandwichImage());
        $this->_f3->set('specialty', DataLayer::getSpecialty());
        $this->_f3->set('specialityImage', DataLayer::getSpecialtyImage());
        $this->_f3->set('drink', DataLayer::getDrink());
        $this->_f3->set('drinkImage', DataLayer::getDrinkImage());

        $view = new Template();
        echo $view->render('views/menu.html');
    }

    function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //if is set to premium will have discounts in the summary
            if (isset($_POST['premium'])) {
                $profile = new Premium();
            } else {
                $profile = new Membership();
            }
            //set the object to $profile
            $_SESSION['profile'] = $profile;



        //Get the data
        //first
        $first = $_POST['first'];
        $this->_f3->set('firstName', $first);

        //If data is first name is valid
        //if data is valid
        if (Validation2::validTitle($first)) {
            $profile->setFirst($first);

            //Store the membership in the session array
            $_SESSION['profile'] = $profile;

            //store it in the session array
            $_SESSION['first'] = $first;
            $_SESSION['profile']->setFirst('first');
        } else {
            $this->_f3->set('errors["first"]', 'Please enter your first name with letters.');
        }

            //last
            $last = $_POST['last'];
            $this->_f3->set('lastName', $last);
        if (Validation2::validTitle($last)) {
            $profile->setLast($last);

            //Store the membership in the session array
            $_SESSION['profile'] = $profile;

            //store it in the session array
            $_SESSION['last'] = $last;
            $_SESSION['profile']->setLast('last');
        } else {
            $this->_f3->set('errors["last"]', 'Please enter your last name with letters.');
        }

        //phone
        $phoneNumber = $_POST['phoneNumber'];
        $this->_f3->set('phoneNumber', $phoneNumber);
        if (validPhoneNumber($phoneNumber)) {
            $profile->setPhone($phoneNumber);

            //Store the membership in the session array
            $_SESSION['profile'] = $profile;

            //store it in the session array
            $_SESSION['phoneNumber'] = $phoneNumber;
            $_SESSION['profile']->setPhone('phone');
        } else {
            $this->_f3->set('errors["phoneNumber"]', 'Please enter your telephone number.');
        }

        //email
        $emailAdd = "";
        if (isset($_POST['emailAdd'])) {
            $emailAdd = $_POST['emailAdd'];
        }
        //store it in the session array
        $_SESSION['email'] = $emailAdd;

        if (Validation::validEmail($emailAdd)) {

            $_SESSION['profile']->setEmail($emailAdd);

        } else {
            $this->_f3->set('errors["email"]', 'Please enter a valid email.');
        }

        //city
        $city = "";
        if (isset($_POST['city'])) {
            $city = $_POST['city'];
        }
        $_SESSION['city'] = $city;
        $_SESSION['profile']->setCity($city);

        //location->state
        $location = "";
        if (isset($_POST['location'])) {
            $state = $_POST['location'];
        }

        $_SESSION['location'] = $location;
        $_SESSION['profile']->setLocation($location);

//        $membership = $_POST['membership'];
//        $this->_f3->set('userMembership', $membership);
//        $_SESSION['membership'] = $membership;

        }
        //redirect route if there are no errors
        if (empty($this->_f3->get('errors'))) {
            header('location: signup_summary');
        }
        //Add states data to hive
        $this->_f3->set('locations', DataLayer::getLocation());

        $view = new Template();
        echo $view->render('views/sign_up.html');
    }

    function signup_summary()
    {
        $view = new Template();
        echo $view->render('views/signup_summary.html');
    }

}