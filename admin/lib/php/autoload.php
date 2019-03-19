<?php

function autoload($nom_classe){
    if(file_exists('./lib/php/classes/'.$nom_classe.'.class.php')){
        require './lib/php/classes/'.$nom_classe.'.class.php'; //si pb, require va arrêter le script; le include va continuer le script donc on s'en sert jamais
    }
    else if(file_exists('./admin/lib/php/classes/'.$nom_classe.'.class.php')){
        require './admin/lib/php/classes/'.$nom_classe.'.class.php';
    }
    else{
        print "Aucune classe chargée : ".$nom_classe;
    }
}
spl_autoload_register('autoload');



?>