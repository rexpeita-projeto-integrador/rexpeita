<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = $_POST['email'];
$password = $_POST['password'];

$login = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";
$verifica = "SELECT * FROM users WHERE administra = '$verifica' ";
$resultverifica = mysqli_query($mysqli, $verifica);

$result = mysqli_query($mysqli, $login);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
        if($resultverifica == 1)
        {
            header("Location:myaccountadm");
        } else {
            header("Location:home");
        }
} else {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:login');
}


?>