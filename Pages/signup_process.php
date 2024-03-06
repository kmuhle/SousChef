<?php

$encrypt_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/db.php";

$sql = "INSERT INTO `user` (name, email, password_hash, preferences)
        VALUES (?, ?, ?, ?)";

// set preferences
if (empty($_POST["preferences"])) {
    $preferences = null; // if none set to null
} else {
    $preferences = implode(",", $_POST["preferences"]);
}
        
$stmt = $mysqli->stmt_init();


if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                  $_POST["name"],
                  $_POST["email"],
                  $encrypt_password,
                  $preferences);

if($stmt->execute()) {
    header("Location: login.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        header("Location: signup.html");
        exit;
    }
    echo $mysqli->errno;
    echo " what happended?";
}

?>