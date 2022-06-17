<?php
include('connexion.php');
include('header.php');
// Insert new admin
if(isset($_POST['submit'])  ) {
    $id = $_POST['id'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
$sql= "UPDATE `admin` SET `pseudo`='$pseudo',`email`='$email',`password`='$password' WHERE `id`= '$id'";

$results = $bdd->query($sql);

header("location:list-admin.php");
}

if(isset($_GET['id'])){
$id = $_GET['id'];
$formUpdateAdmin = $bdd->query("SELECT * FROM `admin` WHERE `id`= $id");
$ok = $formUpdateAdmin->fetch();

}
?>
<section> <!--formulaire de modification des admins-->
        <form action="update-admin.php?id=<?php echo $ok['id'] ?>" method="post" style="padding:150px">
            <h2>Formulaire de modification d'admin</h2>
            <label for="id">ID</label>
            <input type="text" name="idvisible" value="<?php echo $ok['id'];?>" disabled>
            <input type="hidden" name="id" value="<?php echo $ok['id'];?>">
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" value="<?php echo $ok['pseudo'];?>">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $ok['email'];?>">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" value="<?php echo $ok['password'];?>">
            <button type="submit" name="submit">Modifier</button>
        </form>
</section>