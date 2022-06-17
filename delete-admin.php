<?php
include('connexion.php');
include('header.php');

// Delete admin
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT `id`, `pseudo`, `email`, `password` FROM `admin` WHERE id=$id";
$results = $bdd->query($sql);
$donnees = $results->fetch();
}

if(isset($_POST['supprimer'])) {
    $id = $_POST ['id'];
$sql = "DELETE FROM `admin` WHERE id=$id";
$results = $bdd->query($sql);
header("location:list-admin.php");
}
?>

<section> <!--formulaire authentification des admins-->
        <form action="delete-admin.php" method="post" style="padding:150px">
            <h2>Formulaire de suppression d'admin</h2>
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $donnees['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" value="<?php echo $donnees['pseudo'];?>" disabled>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $donnees['email'];?>" disabled>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" value="<?php echo $donnees['password'];?>" disabled>
            <button type="submit" name="supprimer">Supprimer</button>
        </form>
</section>