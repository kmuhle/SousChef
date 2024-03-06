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

$health_labels = $_POST["health_labels"];
$meal_type = $_POST["meal_type"];
$cuisine_type = $_POST["cuisine_type"];

$user_id;

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    die("user not logged in");
}

// upload to the database
$mysqli = require __DIR__ . "/db.php";

$sql = "INSERT INTO favorites (title, ingredients, instruction, time, health_labels, meal_type, cuisine_type, user_id)
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


if ($stmt->execute()) {
    // if you jump to an empty page, please uncomment the following line

    // header("Location: RecipePage.php");
    
    // just in case if the page do jump and guide it back to the original page
    // but hopefully this doesnt happen
    // exit;
} else {
    die("SQL error: " . $mysqli->error);
}
?>