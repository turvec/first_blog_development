<?php

$connection = new mysqli("localhost","root","","blog");
if (!$connection) {
    die("failed to connect". mysqli_connect_error());
}
echo "connection success"

?>