<?php
include('connexion.php');
include('header.php');

/*Requête des toutes les recettes*/
echo "Gestion des articles";
$gestionRecettes = $bdd->query("SELECT * FROM `recettes` WHERE `id` > 0");


while($donnees = $gestionRecettes->fetch())
{
   echo "<pre>";
     print_r($donnees);
    echo "</pre>";
    
}

$gestionRecettes->closeCursor();

?>