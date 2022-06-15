<?php
include('connexion.php');
include('header.php');


/*Requête affichage de tous les admins*/
echo "Gestion des administrateur-ice-s";
$gestionAdmin = $bdd->query("SELECT * FROM `admin` WHERE `id` > 0");




// $gestionAdmin->closeCursor(); DOIT ON FERMER ICI OU AILLEURS OU PAS DU TOUT

?>

<!-- Tableau html pour update des admins -->
<section style="padding:150px">
  <table class="table">
   <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Pseudo</th>
      <th scope="col">Email</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Modification</th>
      <th scope="col">Suppression</th>
    </tr>
   </thead>
<?php
  while($donnees = $gestionAdmin->fetch()){
    echo '<tr>';
    echo'<td>'.$donnees['id'].'</td>';
    echo'<td>'.$donnees['pseudo'].'</td>';
    echo'<td>'.$donnees['email'].'</td>';
    echo'<td>'.$donnees['password'].'</td>';
    // FAIRE LE LIEN ENTRE LES DEUX FAUX BOUTONS ET LES FICHIERS AVEC LES REQUETES UPDATE
    echo'<td> <a class="btn btn-primary" href="update-admin.php?id='.$donnees['id'].'"   role="button">Modifier</a></td>';
    echo'<td> <a class="btn btn-danger" href="delete-admin.php" role="button">Supprimer</a></td>';
    echo '</tr>';
  }
  ?>
  </table>
</section>




</section>

