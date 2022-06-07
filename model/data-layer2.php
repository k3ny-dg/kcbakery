<?php

/*
 * kcbakery/model/data-layer2.php
 * Returns data for the diner app
 */

class DataLayer
{
    /**
     * This field represents our database connectiion object
     * @var PDO <-(type)
     */
    //Add a field for our database connection object
    private $_dbh;
    /**
     * DataLayer constructor
     * @return string[]
     */
    function __construct()
    {
        //TODO: Move try-catch from config.php to here
        require_once $_SERVER['DOCUMENT_ROOT'].'/../config.php';
        $this->_dbh = $dbh;
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    function signUp($signup)
    {
        //1.Define the query

        $sql = "INSERT INTO signup(first, last, phoneNumber, city, state, emailAdd, membership)
        VALUES(:first, :last, :phoneNumber, :city, :state, :emailAdd, :membership)";


//        //2. Prepare the statement
//        $statement = $dbh->prepare($sql);
//
//        //3.Bind the Parameters
//        $statement->bindParam(':first', $);
//        $statement->bindParam(':last', $last, PDO::PARAM_STR);
//        $statement->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);
//        $statement->bindParam(':city', $city, PDO::PARAM_STR);
//        $statement->bindParam(':state', $state, PDO::PARAM_STR);
//        $statement->bindParam(':emailAdd', $emailAdd, PDO::PARAM_STR);
//        $statement->bindParam(':membership', $membership, PDO::PARAM_STR);

        //4. Execute the statement
        $statement->execute();
    }


    static function getLocation()
    {
        return array("Alabama", "Alaska", "Arizona", "Arkansas", "California",
            "Colorado", "Connecticut", "Delaware", "District of Columbia",
            "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana",
            "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
            "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
            "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
            "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
            "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
            "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia",
            "Washington", "West Virginia", "Wisconsin", "Wyoming");
    }

    static function getPastryItem()
    {
        return array('Croissant','Blueberry Muffin', 'Scone', 'Danish');

    }

    static function getPastryImage()
    {
        return array('almond.png', 'blueberry_muffin.png', 'scone.jpeg', 'danish.jpeg');
    }

    static function getDonutItem()
    {
        return array('Cinnamon Sugar', 'Mochi', 'Chocolate Sprinkle', 'Coconut Cream Donut');
    }

    static function getDonutImage()
    {
        return array('cin_donut.png', 'mochi_donut.png','choc_sprink_donut.png','coconut_donut.png');
    }

    static function getSandwich()
    {
        return array('Katsu', 'Strawberry', 'Potato', 'Egg Salad');
    }

    static function getSandwichImage()
    {
        return array('katsu_sandwich.png', 'strawberry_sandwich.png','potato_sandwich.png','egg_salad.jpeg');
    }

    static function getSpecialty()
    {
        return array('Tiramisu', 'Tart', 'Butter Mochi', 'Meringue');
    }

    static function getSpecialtyImage()
    {
        return array('tiramisu.png', 'tart_rasp.png', 'butter_mochi.png', 'tart.png');
    }

    static function getDrink()
    {
        return array('Coffee', 'Tea', 'Hot Chocolate', 'London Fog');
    }

    static function getDrinkImage()
    {
       return array('coffee.png', 'black_tea.png', 'hotchocolate.jpeg', 'london_fog.png') ;
    }

}