<?php
include('connexion.php');
include('header.php');
//faire une page menu admin pour faire l'include sur chaque page
// Insert new admin
//print_r($_POST);
if(isset($_POST['submit'])) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
$sql = "insert into admin (pseudo, email, password) VALUES ('$pseudo','$email','$password')";
$results = $bdd->query($sql);
    if ($results) {
        echo "ok";
    } else {
        die("erreur:");
    }
header("location:list-admin.php");   
}

?>

<section> <!--formulaire authentification des admins-->

        <form action="add-admin.php" method="post" style="padding:150px">
            <h2>Formulaire de création d'admin</h2>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" placeholder="Créez votre pseudo">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Entrez votre email">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Entrez votre mot de passe">

            <button type="submit" name="submit">Valider</button>
        </form>
</section>


