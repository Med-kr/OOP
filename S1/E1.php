<?php

class Person {
    private $nom;

    public function setNom($nom){
        $this->nom = $nom;
    }
    
    public function sayHello() {
        echo  "Bonjour, je m'appell" . $this->nom;
        }

}

$person = new Person();
$person->setNom(' Med');
$person-> sayHello();