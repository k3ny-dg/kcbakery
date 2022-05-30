<?php

function getMembership()
{
    return array("yes", "no");
}

function getLocation()
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

function getPastryItem()
{
    return array('Croissant','Blueberry Muffin', 'Scone', 'Danish');

}

function getPastryImage()
{
    return array('almond.png', 'blueberry_muffin.png', 'scone.jpeg', 'danish.jpeg');
}

function getDonut()
{
    return array("Cinnamon Sugar", "Mochi", "Chocolate Sprinkle", "Coconut Cream Donut");
}

function getSandwich()
{
    return array("Katsu", "Strawberry", "Potato", "Egg Salad");
}

function getSpecialty()
{
    return array("Tiramisu", "Tart", "Butter Mochi", "Meringue");
}

function getDrink()
{
    return array("Coffee", "Tea", "Hot Chocolate", "London Fog");
}
