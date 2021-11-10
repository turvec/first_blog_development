<?php

include_once "connection.php";


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
echo $name;

$query="INSERT INTO users (name,email,password ) VALUES('$name','$email','$password' ) ";

if ($connection->query($query)) {
    echo "data sent";
}else {
    echo $connection->error;
}

?>