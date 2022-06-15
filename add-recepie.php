<?php
include('connexion.php');
include('header.php');
// Insert a new recepie
print_r($_POST);
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
?>