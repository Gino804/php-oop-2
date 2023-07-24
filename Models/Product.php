<?php

class Product
{
    private $id;
    private $img;
    private $name;
    private $price;
    private $animal;

    public function __construct($id, $img, $name, $price, $animal)
    {
        $this->setId($id);
        $this->setImg($img);
        $this->setName($name);
        $this->setPrice($price);
        $this->setAnimal($animal);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }
}
