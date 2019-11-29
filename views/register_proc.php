<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = $_POST['email'];
$password = $_POST['password'];
$password = hash("sha256", $password);

$mysqli->query("INSERT INTO users (email, password) VALUES('$email', '$password')") or die($mysqli->error);
    
?>