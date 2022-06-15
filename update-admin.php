<?php
include('connexion.php');
include('header.php');
// Insert new admin
$password="";

print_r($_GET);
var_dump($_GET);


if(isset($_GET['id'])){
    $pseudo = $_GET['pseudo'];
    $email = $_GET['email'];
    $password = $_GET['password'];
$sql = SELECT `id`, `pseudo`, `email`, `password` FROM `admin` WHERE 1;

    // var_dump($_GET['id']);
    // die('ici');
}

if(isset($_GET['submit'])  ) {
    $pseudo = $_GET['pseudo'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    

// UPDATE `admin` SET `id`='[value-1]',`pseudo`='[value-2]',`email`='[value-3]',`password`='[value-4]' WHERE 1
// "insert into admin (pseudo, email, password) VALUES ('$pseudo','$email','$password')";
$results = $bdd->query($sql);
    if ($results) {
        echo "ok";
    } else {
        die("erreur:");
    }
header("location:list-admin.php");   
}

?>

<section> <!--formulaire de modification des admins-->
        <form action="update-admin.php" method="patch" style="padding:150px">
            <h2>Formulaire de modification d'admin</h2>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" placeholder="Entrez votre nouveau pseudo">

            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Entrez votre nouvel email">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder=<?="$password";?>>

            <button type="submit" name="submit">Modifier</button>
        </form>
</section>