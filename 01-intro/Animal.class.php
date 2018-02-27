<?php
class Animal {
 
 public $color;

 public function respirer() {
     echo 'Je respire<br>';
 }

 public function description() {
     echo 'Je suis un animal de couleur '.$this->color.'<br>';
 }
}

class Chien extends Animal {

 // On ajoute un attribut spécifique à la classe Chien
 public $race;

 public function description() {
     parent::description(); // On exécute la méthode description de la classe parente

     echo 'Je suis un chien de la race '.$this->race.'<br>'; // On ajoute un comportement spécifique à la méthode description
 }

 // On ajoute une méthode spécifique à la classe Chien
 public function aboyer() {
     echo "J'abboie";
 }
}

$animal = new Animal();
$animal->color = 'noir';
$animal->description(); // Affiche Je suis un animal de couleur noir<br>
$animal->respirer(); // Affiche Je respire<br>

/*
La classe Chien hérite de l'attribut color et des méthodes respirer() et description() de la classe Animal.
Il rajoute un attribut spécifique race, ajoute un comportement spécifique à la méthode description() et ajoute une méthode spécifique aboyer().
*/
$chien = new Chien();
$chien->color = 'beige';
$chien->race = 'caniche';
$chien->description(); // Affiche Je suis un animal de couleur beige<br>Je suis un chien de la race caniche<br>
$chien->respirer(); // Affiche Je respire<br>
$chien->aboyer(); // Affiche J'abboie<br>