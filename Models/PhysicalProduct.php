<?php
include_once './Models/Product.php';
class PhysicalProduct extends Product {

    private $weight;

    /**
     * @param $weight
     */
    public function __construct($name, $price, $weight)
    {
        parent::__construct($name, $price);
        $this->setWeight($weight);
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }




}