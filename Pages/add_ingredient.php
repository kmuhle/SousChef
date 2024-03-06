<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    $ingredient = $_POST["ingredient"];

    $conn = require __DIR__ . '/db.php';

    $sql = "SELECT `ingredient_list` FROM ingredients WHERE `user_id` = $user_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $existing_ingredients = explode(",", $row["ingredient_list"]);
    $ingredient_index = array_search($ingredient, $existing_ingredients);
    if ($ingredient_index === false) {
        array_push($existing_ingredients, $ingredient);
        }
        echo "ingredient: $ingredient";
    $ingredients = implode(",", $existing_ingredients);

    $sql = "UPDATE `ingredients` SET `ingredient_list`='$ingredients' WHERE `user_id`=$user_id";

    if (mysqli_query($conn, $sql)) {
        echo "Ingredient added successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    } else {
        $sql = "INSERT INTO `ingredients` (`user_id`, `ingredient_list`) VALUES ($user_id,'$ingredient')";
        $result = mysqli_query($conn, $sql);
    }
} 

mysqli_close($conn);
?>
