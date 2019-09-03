<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'rexpeita');

$cpf = $_POST['cpf'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];

$s = "SELECT * FROM login WHERE email = '$email' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['name'] = $name;
    $_SESSION['address'] = $address;
    header('location:home.php');
} else {
    header('location:login.php');
}
    
?>