<?php

class Product{
    Private $name;

    Private $price;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getInfo() {
        echo 'Product : ' . $this->name . ' - '. $this->price . ' DH';
    }
} 

$product = new Product ();
$product-> setName('Tablette') ;
$product-> setPrice(5000);
$product-> getInfo() ;
