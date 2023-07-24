<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product
{
    private $net_weight;
    private $ingredients;

    public function __construct($id, $img, $name, $price, $animal, $net_weight, $ingredients)
    {
        parent::__construct($id, $img, $name, $price, $animal);
        $this->setNetWeight($net_weight);
        $this->setIngredients($ingredients);
    }

    public function getNetWeight()
    {
        return $this->net_weight;
    }

    public function setNetWeight($net_weight)
    {
        $this->net_weight = $net_weight;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }
}
