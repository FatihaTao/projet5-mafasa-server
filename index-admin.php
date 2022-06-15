<?php
include('connexion.php');
echo "Courage les filles! On va y arriver!!!!😉";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Accueil-Admin</title>
</head>

<body>
    <!--Boutons préformatés bootstrap avec liens vers les pages dédiées à chacun-->
    <a class="btn btn-success" href="list-admin.php" role="button">Gestion Admin</a>

    <a class="btn btn-warning" href="add-admin.php" role="button">Ajout Admin</a>

    <a class="btn btn-info" href="list-recepie.php" role="button">Gestion Recettes</a>

    <a class="btn btn-danger" href="add-recepie.php" role="button">Ajout Recettes</a>
   




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>