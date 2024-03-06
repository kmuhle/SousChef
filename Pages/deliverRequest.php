<?php
session_start();
$user1 = $_SESSION['user_id'];
$user2 = $_POST['user1'];
$response = $_POST['response'];
$status = ($response == 'accept') ? 1 : 2;

// insert new relationship
$mysqli = require __DIR__ . "/db.php";
$sql = "INSERT INTO Friends (User1, User2, Status) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("iii", $user1, $user2, $status);
$stmt->execute();

//update original relationship
$sql = "UPDATE Friends SET Status = ? WHERE User1 = ? AND User2 = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("iii", $status, $user2, $user1);
$stmt->execute();

// redirect back to the friend page
header("Location: friends.php");