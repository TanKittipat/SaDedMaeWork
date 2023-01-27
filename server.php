<?php

$severname = "localhost";
$username = "root";
$password = "";
$dbname = "motherhomework";

// create connection
$conn = mysqli_connect($severname, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection Failed". mysqli_connect_error());
}


?>