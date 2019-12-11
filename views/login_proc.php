<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = mysqli_real_escape_string($mysqli, $_POST["email"]);  
$password = mysqli_real_escape_string($mysqli, $_POST["password"]);  
$password = md5($password); 

$query = "SELECT * FROM users WHERE email = '$email' && password = '$password' ";

$result = mysqli_query($mysqli, $query);

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