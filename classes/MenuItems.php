<?php

class MenuItem
{
    private $_item;
    private $_cost;

    public function __construct()
    {
        $this->_item="";
        $this->_cost=0;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->_item;
    }

    /**
     * @param string $item
     */
    public function setItem(string $item): void
    {
        $this->_item = $item;
    }

    /**
     * @return string
     */
    public function getCost(): string
    {
        return $this->_cost;
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost): void
    {
        $this->_cost = $cost;
    }


    // if + button is pushed, quantity = + 1
    // only display values over 0
    // if - button is clicked, quantity = -1
    // cannot be lower than 0



}

