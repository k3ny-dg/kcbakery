<?php

/*
 * kcbakery/model/data-layer2.php
 * Returns data for the diner app
 */

class DataLayer{

static function getMembership()
{
    return array("yes", "no");
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