<?php
class Category
{
    private $name;

    function __construct(String $name)
    {
        $this->name = $name;
    }
    public function getNameCategory()
    {
        return $this->name;
    }
}
