<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";

class Gioco extends Product
{
    private $color;
    private $material;

    function __construct(String $image, String $title, Category $category, int $price, String $color, String $material)
    {
        parent::__construct($image, $title, $category, $price);
        $this->color = $color;
        $this->material = $material;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getMaterial()
    {
        return $this->material;
    }
}
