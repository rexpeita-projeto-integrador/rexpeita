<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));
  


$email = $_POST['email'];
$password = md5($_POST['password']);

$login = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";

$result = mysqli_query($mysqli, $login);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location:myaccount');
    
} else {
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('location:login');
}
    
?>