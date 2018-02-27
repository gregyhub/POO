<?php
abstract class Vehicule {
    private $_gamme; // SUV; Break; monospac; citadine...
    public $couleur;
    private $_vitesse = 1;

    public function setGamme($gamme) {
        if(empty($gamme)) {
            throw new Exception('la gamme ne peut pas etre vide');
        }
        $this->_gamme = $gamme;
    }
    public function setVitesse($vitesse) {
        if($vitesse<1) {
            throw new Exception('vous etes déjà en 1ere');
        }
        elseif($vitesse>5) {
            throw new Exception('vous etes déjà en 5eme');
        }
        $this->_vitesse = $vitesse;
    }

    public function Demarre() {
        return "Vroum Vroum !<br>";
    }
    public function Roule() {
        return "Vroooooooo !<br>";
    }
    public function ChangeDeVitesse() {
        return 'Rheuuu : '.setVitesse($vitesse++).'<br>';
    }
    public function Retrograde() {
        return 'Broum : '.$this->vitesse--.'<br>';
    }
    public function Arrete() {
        return 'Criiii<br>';
    }
}

try{
    $peug2008 = new Voiture();
    $peug2008->setGamme('suv');
    $peug2008->couleur = 'grise métalisée';

    echo $peug2008->Demarre();
    echo $peug2008->Roule();
    echo $peug2008->ChangeDeVitesse();
    echo $peug2008->ChangeDeVitesse();
    echo $peug2008->ChangeDeVitesse();
    echo $peug2008->Roule();
    echo $peug2008->Retrograde();
    echo $peug2008->Retrograde();
    echo $peug2008->Retrograde();
    echo $peug2008->Arrete();

   /*  echo '<pre>';
    var_export($peug2008);
    var_dump($peug2008);
    print_r($peug2008);
    echo '</pre>'; */

} catch(Exception $error){
    echo "Une Erreur a eu lieu <b>". $error->getMessage() ."</b> à la line <b>". $error->getline()."</b> du fichier <b>".$error->getFile() ;
}
