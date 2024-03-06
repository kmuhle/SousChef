<?php
session_start();
$response = array();
if (isset($_SESSION['user_id'])) {
    $response['status'] = 'success';
} else {
    $response['status'] = 'error';
}
echo json_encode($response);
?>
