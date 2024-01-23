<?php
include 'templates/header.php';
include 'app/functions.php';

// 📝 Ici je récupère pour vous l'ID de la recette, depuis la requête GET
$recipeId = isset($_GET['id']) ? $_GET['id'] : die('ID de la recette non spécifié.');

// 📝  On récupère ensuite les détails de la recette dans une variable
$recipe = readRecipe($recipeId);

// 📝 Si la recette correspond à l'ID existe belle et bien alors....
if ($recipe) {
    echo '<h1>' . htmlspecialchars($recipe['titre']) . '</h1>';
    echo '<p>' . htmlspecialchars($recipe['description']) . '</p>';
    echo '<h2>Ingrédients</h2>';
    echo '<ul>';
    foreach ($recipe['ingredients'] as $ingredient) {
        echo '<li>' . htmlspecialchars($ingredient) . '</li>';
    }
    echo '</ul>';
    echo '<h2>Étapes de préparation</h2>';
    echo '<ul>';
    if (isset($recipe['etapes'])) {
        foreach ($recipe['etapes'] as $etapes) {
            echo '<li>' . htmlspecialchars($etapes) . '</li>';
        }
    }
    echo '</ul>';
} else {
    echo "<p>Recette introuvable.</p>";
}

include 'templates/footer.php';