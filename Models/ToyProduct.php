<?php

require_once __DIR__ . '/MiscellaneousProduct.php';

class ToyProduct extends MiscellaneousProduct
{
    private $traits;

    public function __construct($id, $img, $name, $price, $animal, $materials, $size, $traits)
    {
        parent::__construct($id, $img, $name, $price, $animal, $materials, $size);
        $this->setTraits($traits);
    }

    public function getTraits()
    {
        return $this->traits;
    }

    public function setTraits($traits)
    {
        $this->traits = $traits;
    }
}
