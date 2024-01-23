<?php
include 'templates/header.php';
include 'app/functions.php';

// 👩‍💻 Récuperez les recettes depuis le dossier data grâce à la fonction getAllRecipes
$allRecipes = getAllRecipes();

?>

<h1>Liste des Recettes</h1>
<ul>
    <?php
    foreach ($allRecipes as $recipe) {
        $recipeId = $recipe['id'];
        $recipeTitle = htmlspecialchars($recipe['titre']);
        echo "<li><a href='recipe.php?id=$recipeId'>$recipeTitle</a></li>";
    }
    ?>
</ul>

<h1>Ajoutez votre propre recette !</h1>

<form action="cible.php" method="post">

<p>

<strong> Nom de la recette :</strong> <label for=" Nom de la recette "></label> <input id=" Nom de la recette " name="nom" size="18" type="text" /> <br/><br/>

<strong> Description : </strong><br /> <label for="email"></label> <input id="email" name="email" size="81" type="text" /> <br /><br />

<p> Quel est le type de recette ?</p>

<label for="type"></label> <select id="type" name="gout"><option value="gout">Sucré</option><option value="reglement">Salé</option>


<input type="reset" value="Supprimer" /> <input type="submit" value="Valider" />


</form>


<?php
include 'templates/footer.php';
?>