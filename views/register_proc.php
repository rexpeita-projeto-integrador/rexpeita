<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = mysqli_real_escape_string($mysqli, $_POST["email"]);  
$password = mysqli_real_escape_string($mysqli, $_POST["password"]);  
$password = md5($password);

$mysqli->query("INSERT INTO users (email, password) VALUES('$email', '$password')") or die($mysqli->error);
    
?>

<a href="login"><button class="btn btn-danger">Ir para o Login</button></a>
