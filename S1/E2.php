<?php 

class Personne{
    private $name;


    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo  "Bonjour, je m'appell" . $this->name;
        }

}

$personne = new Personne(' sami');

$personne-> sayHello();