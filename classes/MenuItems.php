<?php
/*
 328/kcbakery/classes/Membership.php
 */


/**
 * The MenuItem class creates a MenuItem object
 * that will hold different types of menu items
 * that will be implemented in the menu
 *
 * @author Keny Dutton-Gillespie and Cherie Menchaca
 * @version 1.0
 *
 */

class MenuItem
{
    //private $_item;
    //private $_cost;
    private $_pastry;
    private $_donut;
    private $_sandwich;
    private $_specialty;
    private  $_drink;
    private $_price;

    /**
     *
     */
    public function __construct()
    {
        $this->_pastry= "";
        $this->_donut= "";
        $this->_sandwich= "";
        $this->_specialty= "";
        $this->_drink= "";
        $this->_price= 0.00;
    }

<<<<<<< HEAD
    /**Get Pastry
     * @return string
=======
    /**
     * Returns the options for pastries from the DataLayer
     * @return string pastry options
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     */
    public function getPastry(): string
    {
        return $this->_pastry;
    }

<<<<<<< HEAD
    /**Set pastry
=======
    /**
     * Sets the user's selections of what pastries
     * they would like to include in their order
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     * @param string $pastry
     */
    public function setPastry(string $pastry): void
    {
        $this->_pastry = $pastry;
    }

<<<<<<< HEAD
    /**Get Donuts
     * @return string
=======
    /**
     * Returns the options for donuts from the DataLayer
     * @return string donut options
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     */
    public function getDonut(): string
    {
        return $this->_donut;
    }

<<<<<<< HEAD
    /**Set Donut
=======
    /**
     * Sets the user's selections of what donuts
     * they would like to include in their order
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     * @param string $donut
     */
    public function setDonut(string $donut): void
    {
        $this->_donut = $donut;
    }

<<<<<<< HEAD
    /**Get Sandwich
     * @return string
=======
    /**
     * Returns the options for sandwiches from the DataLayer
     * @return string sandwich options
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     */
    public function getSandwich(): string
    {
        return $this->_sandwich;
    }

<<<<<<< HEAD
    /**Set Sandwich
=======
    /**
     * Sets the user's selections of what sandwiches
     * they would like to include in their order
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     * @param string $sandwich
     */
    public function setSandwich(string $sandwich): void
    {
        $this->_sandwich = $sandwich;
    }

<<<<<<< HEAD
    /**Get Specialty
     * @return string
=======
    /**
     * Returns the options for specialty items from the DataLayer
     * @return string specialty item options
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     */
    public function getSpecialty(): string
    {
        return $this->_specialty;
    }

<<<<<<< HEAD
    /**Set specialty
=======
    /**
     * Sets the user's selections of what specialty item
     * they would like to include in their order
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     * @param string $specialty
     */
    public function setSpecialty(string $specialty): void
    {
        $this->_specialty = $specialty;
    }

<<<<<<< HEAD
    /**Get Drink
     * @return string
=======
    /**
     * Returns the options for drinks from the DataLayer
     * @return string drink options
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     */
    public function getDrink(): string
    {
        return $this->_drink;
    }

<<<<<<< HEAD
    /**Set Drink
=======
    /**
     * Sets the user's selections of what drinks
     * they would like to include in their order
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     * @param string $drink
     */
    public function setDrink(string $drink): void
    {
        $this->_drink = $drink;
    }

<<<<<<< HEAD
    /**Get price
     * @return float
=======
    /**
     * Returns the total of the order created
     * by the user
     *
     * @return float total of the entire order
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     */
    public function getPrice(): float
    {
        return $this->_price;
    }

<<<<<<< HEAD
    /**Set price
=======
    /**
     * Sets the total price of the order
     *
>>>>>>> 06970681c90fde384a410cf762f062b357cce514
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->_price = $price;
    }
}