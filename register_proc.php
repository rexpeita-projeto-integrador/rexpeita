<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'rexpeita');

$cpf = $_POST['cpf'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];

$s = "SELECT * FROM login WHERE email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo"Estes dados já existem no sistema.";
} else {
    $reg = "INSERT INTO login(cpf, email, password, name, address) VALUES ('$cpf', '$email', '$password', '$name', '$address')";
    mysqli_query($con, $reg);
    echo"Registro realizado com Sucesso!";
}
    
?>