<?php

class MenuItem
{
    //private $_item;
    //private $_cost;
    private string $_pastry;
    private string $_donut;
    private string $_sandwich;
    private string $_specialty;
    private string $_drink;

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






}

