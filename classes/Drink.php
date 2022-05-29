<?php

class Drink extends MenuItem
{
    private $_iced;

    function __construct()
    {
        $_iced= false;
    }

    /**
     * Returns if a drink is iced or not
     * Default value is hot
     * @return boolean iced
     */
    public function getIced()
    {
        return $this->_iced;
    }

    /**
     * Sets if the drink is iced
     * @param boolean $iced
     */
    public function setIced($iced): void
    {
        $this->_iced = $iced;
    }



}