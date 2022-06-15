<?php
include('connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <header>
        <nav>
            <div> logo </div>
            <ul>
                <li> </li>
                <li> </li>
            </ul>
        </nav>

    </header>
   
    <section> <!--formulaire authentification des admins-->
        <form action="index-admin.php" method="post" style="border:1px solid black;padding:5px;">
            <h2>Formulaire d'authentification</h2>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Entrez votre email">

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe">

            <button type="submit">Valider</button>
    
        </form>

    </section>


    <footer>  
    </footer>
</body>
</html>