<?php
$pages = array(
    'Accueil' => 'index.php',
    'Actualités' => 'news.php',
    'Recherche' => 'search.php',
    'Contact' => 'contact.php'
);

function myAutoLoader($class_name) {
    $class_path = 'class/'.$class_name.'.class.php';
    if (file_exists($class_path)) {
        include $class_path;
        return true;
    }
    // On peut soulever une exception si le fichier n'existe pas
}
spl_autoload_register('myAutoLoader');

require_once('func.php');
