<?php
session_start();
if (isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
} else {
  die("user not logged in");
}

$ingredient = $_POST["ingredient"];

$conn = require __DIR__ . '/db.php';

$sql = "SELECT `ingredient_list` FROM ingredients WHERE `user_id` = $user_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $existing_ingredients = explode(",", $row["ingredient_list"]);
  $ingredient_index = array_search($ingredient, $existing_ingredients);
  if ($ingredient_index !== false) {
    array_splice($existing_ingredients, $ingredient_index, 1);
  }

  $ingredients = implode(",", $existing_ingredients);

  $sql = "UPDATE `ingredients` SET `ingredient_list`='$ingredients' WHERE `user_id`=$user_id";

  if (mysqli_query($conn, $sql)) {
    echo "Ingredient removed successfully.";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
} else {
  echo "No results found.";
}
mysqli_close($conn);
?>
