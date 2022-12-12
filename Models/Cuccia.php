<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/Product.php";
class Cuccia extends Product
{
    private $width;
    private $height;
    private $material;

    function __construct(String $image, String $title, Category $category, int $price, int $width, int $height, String $material)
    {
        parent::__construct($image, $title, $category, $price);
        $this->width = $width;
        $this->height = $height;
        $this->material = $material;
    }

    public function getWidth()
    {
        return $this->width;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getMaterial()
    {
        return $this->material;
    }
}
