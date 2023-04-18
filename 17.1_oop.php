<?php

//*_______ PRACTICE

class Food
{
    private string $category;
    private string $parentName;
    private string $name;
    private int|float $price;

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->parentName = "food";
        $this->price = $price;
    }

    public function get_info()
    {
        return nl2br("Name: {$this->name}\r\nCategory: {$this->category} \r\n Price: {$this->price} \r\n  ParentName: {$this->get_parentName()}\r\n");
    }

    protected function get_parentName()
    {
        return $this->parentName;
    }
}

class Burger extends Food
{
    //I could implement some burger exclusives here that all other burger may have in common.
    //overrides parent methods or class.
}


$hamburger = new Burger("Hamburger", "Burger", 11.83);

// echo $hamburger->get_info();

// $hamburger->get_info();
// $hamburger->get_name();


