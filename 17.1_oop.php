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

echo $hamburger->get_info();

// $hamburger->get_info();
// $hamburger->get_name();


//*___________ Interface

//A WORKAROUND FOR MULTIPLE INHERITENCE.

interface displayItem
{
    public function showItem(string $text = null);

}

class Pizza extends Food implements displayItem
{

    private string $name = '';



    public function showItem(?string $text = null)
    {
        echo "You ordered a {$text}";
    }
}
echo "<br>";

$italianPizza = new Pizza("Italian Pizza", "Pizza", 23.23);

echo $italianPizza->get_info();

$italianPizza->showItem("Italian Pizza");
