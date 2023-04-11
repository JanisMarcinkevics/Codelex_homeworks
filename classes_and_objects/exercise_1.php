<?php declare(strict_types=1);

//Create a class Product that represents a product sold in a shop. A product has a price, amount and name.
//The class should have:
//A constructor Product  __construct(string name, float startPrice, int amount)
//A function printProduct() that prints a product in the following form:
//Banana, price 1.1, amount 13
//Test your code by creating a class with main method and add three products there:
//"Logitech mouse", 70.00 EUR, 14 units
//"iPhone 5s", 999.99 EUR, 3 units
//"Epson EB-U05", 440.46 EUR, 1 units
//Print out information about them.
//Add new behaviour to the Product class:
//possibility to change quantity
//possibility to change price
//
//Reflect your changes in a working application.

class Product
{
    private string $name;
    private int $price;
    private int $amount;

    public function __construct(string $name, int $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {

        return "{$this->name}, price " . number_format($this->price / 100, 2) . ", amount {$this->amount}\n";
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}

class Main
{
    private array $products = [];

    public function __construct()
    {
        $this->products = [
            new Product("Logitech mouse", 7000, 14),
            new Product("iPhone 5s", 99999, 3),
            new Product("Epson EB-U05", 44046, 1)
        ];
    }

    public function printProducts(): void
    {
        foreach ($this->products as $product) {
            echo $product->printProduct();
        }
    }
}

$main = new Main();
$main->printProducts();