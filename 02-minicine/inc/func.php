<?php
require_once 'bdd.php';

function debug($array){
   echo  '<pre>'.print_r($array, true).'</pre>';
}

function generateListe($debut, $fin, $saut=1){
    $retour = array();
    if($debut < $fin ) {
        for($debut; $debut <= $fin; $debut+=$saut){
            $retour[]=$debut;
        }
    }else if ($debut > $fin){
        for($debut; $debut >= $fin; $debut-=$saut){
            $retour[]=$debut;
        }
    }
    return $retour;
}

function getSynopsis($string, $max_length=0, $end='...') {
    if($max_length <= 0){
        return $string;
    }
    $result = substr($string, 0, $max_length);
    if(strlen($string) > $max_length){
        $result .=$end;
    }
    return $result;
}

function getCover($nameImg=0){
    return file_exists('img/covers/'.$nameImg.'.jpg') ? 'img/covers/'.$nameImg.'.jpg' : 'img/cover.png';
}