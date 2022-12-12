<?php
require_once __DIR__ . "/Category.php";
class Product
{
    private $image;
    private $title;
    private $category;
    private $price;

    function __construct(String $image, String $title, Category $category, Int $price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
