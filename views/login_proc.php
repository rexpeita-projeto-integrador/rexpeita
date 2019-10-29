<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = $_POST['email'];
$password = $_POST['password'];

$mysqli->query("SELECT email, password  FROM users where '$email' = email and '$password' = password  ") or die($mysqli->error);

if($email == $mysqli || $password == $mysqli )
{
    header('Location:home.php');
}
else
{
    header('Location:login.php');
}

    
?>