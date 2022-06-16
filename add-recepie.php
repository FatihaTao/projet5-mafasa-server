<?php
include('connexion.php');
// include('header.php');
// Insert a new recepie
print_r($_POST);
if(isset($_POST['submit'])) {
    $creator_id = 1;
    $title = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $nbr_people = $_POST['nbr_people'];
    $publishdate = $_POST['publishdate'];
    $prep_time = $_POST['prep_time'];
    $level = $_POST['level'];
    $video = $_POST['video'];
    $rating = $_POST['rating'];
    
$sql = "insert into recettes (creator_id, title, image, description, category, nbr_people, publishdate, level, video, rating) VALUES ($creator_id, '$title', '$image', '$description', '$category', '$nbr_people', $publishdate, '$level', '$video', $rating)";
var_dump($sql);
//  die();
$results = $bdd->exec($sql);
//$bdd->exec($sql);
var_dump($results);
    if ($results) {
        echo "Votre recette a bien été ajoutée! 😋";
    } else {
        var_dump($bdd->errorInfo());
    die();
    }
header("location:list-recepie.php");   
}

?>
<section> <!--formulaire gestion des recettes-->
        <form action="add-recepie.php" method="post" style="padding:150px">
            <h2>Formulaire d'ajout des recettes</h2>

            <!-- <label for="creator_id">creator_id</label> -->
            <!-- <input type="text" name="creator_id" placeholder="Votre pseudo"> -->

            <label for="title">title</label>
            <input type="text" name="title" placeholder="Entrez le nom de la recette">

            <label for="image">image</label>
            <input type="text" name="image" placeholder="Ajoutez l'image">

            <label for="description">description</label>
            <input type="text" name="description" placeholder="Ajoutez la description de la recette">

            <label for="category">categorie</label>
            <input type="text" name="category" placeholder="Ajoutez la catégorie de la recette">

            <label for="nbr_people">nombre de personne</label>
            <input type="text" name="nbr_people" placeholder="nombre de personne">
            
            <label for="publishdate">date de publication</label>
            <input type="date" name="publishdate" placeholder="publishdate">

            <label for="prep_time">temps de préparation</label>
            <input type="time" name="prep_time" placeholder="prep_time">

            <label for="level">Niveau</label>
            <input type="text" name="level" placeholder="level">

            <label for="video">Video</label>
            <input type="text" name="video" placeholder="video">

            <label for="rating">Nombre d'étoiles</label>
            <input type="text" name="rating" placeholder="rating">


            <button type="submit" name="submit">Valider</button>
        </form>
</section>