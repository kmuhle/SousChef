<?php

session_start();

// Checks if each attribute is provided
if (empty($_POST["title"])) {
    die("Recipe titles are needed");
}

if (empty($_POST["ingredients"])) {
    die("Ingredient titles are needed");
}

if (empty($_POST["instructions"])) {
    die("Instructions titles are needed");
}

if (empty($_POST["total_time"])) {
    die("Total time is needed");
}

if (empty($_POST["health_labels"])) {
    $health_labels = null; // if none set to empty string
} else {
    $health_labels = implode(", ", $_POST["health_labels"]);
}

if (empty($_POST["meal_type"])) {
    $meal_type = null;
}else {
    $meal_type = implode(", ", $_POST["meal_type"]);
}

if (empty($_POST["cuisine_type"])) {
    $cuisine_type = null;
}else {
    $cuisine_type = implode(", ", $_POST["cuisine_type"]);
}

$user_id;

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    die("user not logged in");
}

// upload to the database
$mysqli = require __DIR__ . "/db.php";

$sql = "INSERT INTO recipes (title, ingredients, instruction, time, health_labels, meal_type, cuisine_type, user_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param(
    "sssisssi",
    $_POST["title"],
    $_POST["ingredients"],
    $_POST["instructions"],
    $_POST["total_time"],
    $health_labels,
    $meal_type,
    $cuisine_type,
    $user_id
);

// jump to the next pageif ss
if ($stmt->execute()) {
    $recipe_id = $mysqli->insert_id;
    echo "<script>alert('Your Recipe Has Been Uploaded!'); window.location='RecipeBook.php';</script>";
    exit;
} else {
    die("SQL error: " . $mysqli->error);
}
?>