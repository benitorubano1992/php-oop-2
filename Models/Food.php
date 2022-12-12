<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";
class Food extends Product
{
    private $weight;
    private $ingredients;
    private $expiration_date;

    function __construct(String $image, String $title, Category $category, Int $price, int $weight, array $ingredients, String $expiration_date)
    {
        parent::__construct($image, $title, $category, $price);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->expiration_date = $expiration_date;
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function getIngredients()
    {
        return $this->ingredients;
    }
    public function getExpiration()
    {
        return $this->expiration_date;
    }
}
