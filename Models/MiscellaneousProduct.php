<?php

require_once __DIR__ . '/Product.php';

class MiscellaneousProduct extends Product
{

    private $materials;
    private $size;

    public function __construct($id, $img, $name, $price, $animal, $materials, $size)
    {
        parent::__construct($id, $img, $name, $price, $animal);
        $this->setMaterials($materials);
        $this->setSize($size);
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function setMaterials($materials)
    {
        $this->materials = $materials;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
