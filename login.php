<?php
include('connexion.php');
include('header.php');
//var_dump($_POST);
if(isset($_POST['submit'])) { 
    $pseudo = $_POST['pseudo'];
    $email = $_POST["email"];
    $password = $_POST['password'];


    $reponse = $bdd->query("SELECT * FROM `admin` WHERE `pseudo` LIKE '$pseudo' AND `email` LIKE '$email' AND `password` LIKE '$password'");
    if($donnees = $reponse->fetch()) {
        echo "Login réussi!";
        header("location:index-admin.php");
    }else{
        echo "Authentification n'a pas réussi";
    }
}
   

?>
<section style="padding:150px"> <!--formulaire authentification des admins-->
    <form action="login.php" method="post" style="border:1px solid black;padding:5px">
        <h2>Formulaire d'authentification</h2>
        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Entrez votre email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">
        <button type="submit" name="submit">Valider</button>
    </form>
</section>
<?php
include('footer.php');
?>