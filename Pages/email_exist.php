<?php

$mysqli = require __DIR__ . "/db.php";
//Search whether this email exists
$sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_GET["email"])); 
$result = $mysqli->query($sql);
$not_exist = ($result->num_rows === 0);
header("Content-Type: application/json");
//Return a boolean variable that represents whether this email exist or not; if the email does not exist then it is valid for usage
echo json_encode(["valid" => $not_exist]);

// $mysqli = require __DIR__ . "/db.php";
// $Cur = 
// $sql = "SELECT * FROM user WHERE email = ?";
// $stmt = $mysqli->stmt_init();
// if (!$stmt->prepare($sql)) {
//     die("SQL error: " . $mysqli->error);
// }
// $stmt->bind_param("s", $Cur);
// <?php

// $mysqli = require __DIR__ . "/db.php";

// $sql = sprintf("SELECT * FROM user
//                 WHERE email = '%s'",
//                 $mysqli->real_escape_string($_GET["email"]));
                
// $result = $mysqli->query($sql);

// $is_available = $result->num_rows === 0;

// header("Content-Type: application/json");

// echo json_encode(["available" => $is_available]);