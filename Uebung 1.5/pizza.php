<?php
// 1. Session starten
session_start();
// 2. Daten aus Session lesen
$ingredients = [];
if (array_key_exists('ingredients', $_SESSION)) {
    $ingredients = $_SESSION['ingredients'];
}
// 3. Daten verändern
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newIngredient = array_key_exists('ingredient', $_POST) ? $_POST['ingredient'] : '';
    if ($newIngredient !== '') {
        array_push($ingredients, $newIngredient);
//        $ingredients[] = $newIngredient;
    }
}
// 4. Daten in Session speichern
$_SESSION['ingredients'] = $ingredients;
?>
<h1>Zutat hinzufügen</h1>
<form method="post" action="?">
    <input type="text" name="ingredient" placeholder="Zutat eingeben..." />
    <input type="submit" value="Hinzufügen" />
</form>
<h2>Deine Zutaten</h2>
<ul>
    <?php
        foreach ($ingredients as $ingredient) {
            echo "<li>{$ingredient}</li>";
        }
    ?>
</ul>

if (isset($_SESSION['zutaten'])) {
    $zutaten = $_SESSION['zutaten'];
}
$_SESSION['zutaten'] = $zutaten;


$ingredients = [];
if (array_key_exists(key: 'ingredients', $_SESSION)){
    $ingredients = $_SESSION['ingredients'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    array_push($zutaten, $_POST["ingredient"]);
    echo "Die Pizza hat die Zutaten";
    for ($i = 0; $i < count($zutaten); $i++) {
        echo " {$zutaten[$i]}";
    };
}