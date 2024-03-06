<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
    echo "User Id: $user_id";
} else {
    header('Location: login.php');
}

$new_plan = $_POST["new_plan"];

$conn = require __DIR__ . '/db.php';

  $sql = "UPDATE `user` SET `member`=$new_plan WHERE `id`=$user_id";
  echo $sql;

  if (mysqli_query($conn, $sql)) {
    echo "\nPlan changed successfully";
  } else {
    echo "\nUnable to make plan change";
  }

mysqli_close($conn);
?>
