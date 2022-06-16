<?php

class MenuItem
{
    //private $_item;
    //private $_cost;
    private $_pastry;
    private $_donut;
    private $_sandwich;
    private $_specialty;
    private  $_drink;
    //private $_price;

    public function __construct()
    {
        $this->_pastry= "";
        $this->_donut= "";
        $this->_sandwich= "";
        $this->_specialty= "";
        $this->_drink= "";
        //$this->_price= 0.00;
    }

    /**
     * @return string
     */
    public function getPastry(): string
    {
        return $this->_pastry;
    }

    /**
     * @param string $pastry
     */
    public function setPastry(string $pastry): void
    {
        $this->_pastry = $pastry;
    }

    /**
     * @return string
     */
    public function getDonut(): string
    {
        return $this->_donut;
    }

    /**
     * @param string $donut
     */
    public function setDonut(string $donut): void
    {
        $this->_donut = $donut;
    }

    /**
     * @return string
     */
    public function getSandwich(): string
    {
        return $this->_sandwich;
    }

    /**
     * @param string $sandwich
     */
    public function setSandwich(string $sandwich): void
    {
        $this->_sandwich = $sandwich;
    }

    /**
     * @return string
     */
    public function getSpecialty(): string
    {
        return $this->_specialty;
    }

    /**
     * @param string $specialty
     */
    public function setSpecialty(string $specialty): void
    {
        $this->_specialty = $specialty;
    }

    /**
     * @return string
     */
    public function getDrink(): string
    {
        return $this->_drink;
    }

    /**
     * @param string $drink
     */
    public function setDrink(string $drink): void
    {
        $this->_drink = $drink;
    }

//    /**
//     * @return float
//     */
//    public function getPrice(): float
//    {
//        return $this->_price;
//    }
//
//    /**
//     * @param float $price
//     */
//    public function setPrice(float $price): void
//    {
//        $this->_price = $price;
//    }
}