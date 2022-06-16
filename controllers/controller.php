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


    function username()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            global $order;
            $order = new MenuItem();

            $user = "";
            if (isset($_POST['user'])) {
                $user = $_POST['user'];
            }
            $this->_f3->set('user', $user);

            $order>setUser($user);

            $_SESSION['order']=$order;

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Redirect to interests route if there are no errors
                if (empty($this->_f3->get('errors'))) {

                    header("location: menu.html");
                }
            }
        }
        $view = new Template();
        echo $view->render('views/username.html');
    }


    function menu()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $price = 0.0;

            $pastries = "";

            // Pastries are not required
            if (empty($_POST['pastries'])) {
                $pastries = "none selected";
            } // User selected pastries
            else {
                // Get pastries from post array
                $userPastries = $_POST['pastries'];

                // If pastries are valid, convert to string
                if (Validation2::validPastry($userPastries)) {

                    $pastries = implode(", ", $userPastries);
                    $price = sizeof($userPastries) * 3;

                } else {
                    $this->_f3->set('errors["pastry"]', 'You spoofed me!');
                }
            }

            // DONUTS

            $donuts = "";

            if (empty($_POST['donuts'])) {
                $donuts = "none selected";
            } else {

                // Get condiments from post array
                $userDonuts = $_POST['donuts'];

                // If condiments are valid, convert to string
                if (Validation2::validDonut($userDonuts)) {
                    $donuts = implode(", ", $userDonuts);
                    $price = $price + sizeof($userDonuts) * 2;
                } else {
                    $this->_f3->set('errors["donut"]', 'You spoofed me!');
                }
            }

            // SANDWICHES

            $sandwiches = "";

            // Condiments are not required
            if (empty($_POST['sandwiches'])) {
                $sandwiches = "none selected";
            } // User selected condiments
            else {

                $userSandwiches = $_POST['sandwiches'];

                if (Validation2::validSandwiches($userSandwiches)) {
                    $sandwiches = implode(", ", $userSandwiches);
                    $price = $price + sizeof($userSandwiches) * 4;
                } else {
                    $this->_f3->set('errors["sandwich"]', 'You spoofed me!');
                }
            }

            //SPECIALTY

            $specialtyItems = "";

            if (empty($_POST['specialtyItems'])) {
                $specialtyItems = "none selected";
            } else {
                $userSpec = $_POST['specialtyItems'];

                if (Validation2::validSpecialty($userSpec)) {
                    $specialtyItems = implode(", ", $userSpec);
                    $price = $price + sizeof($userSpec) * 3.5;
                } else {
                    $this->_f3->set('errors["specialty"]', 'You spoofed me!');
                }
            }

            // DRINKS

            $drinks = "";

            if (empty($_POST['drinks'])) {
                $drinks = "none selected";
            } else {

                $userDrinks = $_POST['drinks'];

                if (Validation2::validDrink($userDrinks)) {
                    $drinks = implode(", ", $userDrinks);
                    $price = $price + sizeof($userDrinks) * 2.5;

                } else {
                    $this->_f3->set('errors["drink"]', 'You spoofed me!');
                }
            }

            //If there are no errors...
            if (empty($this->_f3->get('errors'))) {

                if($price > 0) {

                    //$order->setPastry($pastries);
                   //$_SESSION['order'] = $order;
                    $_SESSION['order']->setDonut($donuts);
                    $_SESSION['order']->setSandwich($sandwiches);
                    $_SESSION['order']->setSpecialty($specialtyItems);
                    $_SESSION['order']->setDrink($drinks);
                    $_SESSION['order']->setPrice($price);

                    header('location: cart');
                }
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


    function signUp()
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
                $_SESSION['profile'] = $profile;
            } else {
                $this->_f3->set('errors["first"]', 'Please enter your first name with letters.');
            }

            //last
            $last = $_POST['last'];
            $this->_f3->set('lastName', $last);
            if (Validation2::validTitle($last)) {
                $profile->setLast($last);
                $_SESSION['profile'] = $profile;
            } else {
                $this->_f3->set('errors["last"]', 'Please enter your last name with letters.');
            }

            //phone
            $phoneNumber = $_POST['phoneNumber'];
            $this->_f3->set('phoneNumber', $phoneNumber);
            if (Validation2::validPhoneNumber($phoneNumber)) {
                $profile->setPhone($phoneNumber);
                $_SESSION['profile'] = $profile;
            } else {
                $this->_f3->set('errors["phoneNumber"]', 'Please enter your telephone number.');
            }
            //address
            $add = "";
            if (isset($_POST['add'])) {
                $add = $_POST['add'];
            }
            $_SESSION['add'] = $add;
            $_SESSION['profile']->setAdd($add);

            //email
            $emailAdd = "";
            if (isset($_POST['emailAdd'])) {
                $emailAdd = $_POST['emailAdd'];
            }
            //store it in the session array
            $_SESSION['emailAdd'] = $emailAdd;
            if (Validation2::validEmailaddr($emailAdd)) {
                $_SESSION['profile']->setEmailAdd($emailAdd);
            } else {
                $this->_f3->set('errors["emailAdd"]', 'Please enter a valid email.');
            }

            //city
            $city = "";
            if (isset($_POST['city'])) {
                $city = $_POST['city'];
            }
            $_SESSION['city'] = $city;
            $_SESSION['profile']->setCity($city);


            //location->state
            $location = $_POST['location'];
            $this->_f3->set('userLocation', $location);
            $_SESSION['profile']->setLocation($location);

            //location->state
            $location = $_POST['location'];
            $this->_f3->set('userLocation', $location);
            $_SESSION['profile']->setLocation($location);

            //username
            $user = "";
            if (isset($_POST['user'])) {
                $user = $_POST['user'];
            }
            $this->_f3->set('user', $user);
            $_SESSION['profile']->setUser($user);

            //pass
            $pass = "";
            if (isset($_POST['pass'])) {
                $pass = $_POST['pass'];
            }
            $this->_f3->set('pass', $pass);
            $_SESSION['profile']->setPass($pass);



            //redirect route if there are no errors
            if (empty($this->_f3->get('errors'))) {
                header('location: signup_summary');
            }

        }

        //Add states data to hive
        $this->_f3->set('locations', DataLayer::getLocation());

        $view = new Template();
        echo $view->render('views/sign_up.html');
    }

    function signup_summary()
    {
        $profile_id = $GLOBALS['dataLayer']->saveProfile($_SESSION['profile']);
        $this->_f3->set('profileId', $profile_id);
        $view = new Template();
        echo $view->render('views/signup_summary.html');

        //clear the session array
        session_destroy();
    }

    function confirm()
    {
        $view = new Template();
        echo $view->render('views/confirmation.html');
    }

    function cart()
    {
        $view = new Template();
        echo $view->render('views/cart.html');
    }

    function profile()
    {
        $view = new Template();
        echo $view->render('views/profile.html');
    }


}