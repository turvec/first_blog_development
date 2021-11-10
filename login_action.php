<?php

include_once "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from users where email='$email' AND password='$password'";
$valid = $connection->query($query);

if ($valid->num_rows == 0) {
    echo 'Invalid details';
}else{
    session_start();
    $user = $valid->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    // redirect to dashboard
}

?>