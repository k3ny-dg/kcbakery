<?php

Class Pastries extends MenuItem
{
    private $_temp;

    function __construct()
    {
        $_temp = false;
    }

    /**
     * returns whether a pastry is heated
     * @return boolean
     */
    public function getTemp()
    {
        return $this->_temp;
    }

    /**
     * sets if a pastry is heated
     * @param boolean $temp
     */
    public function setTemp($temp): void
    {
        $this->_temp = $temp;
    }





}