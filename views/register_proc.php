<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'rexpeitav2');

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE email = '$email'";
$mandar = "INSERT INTO  users  SET  '$email' = email,  '$password' = password"; 
$sql = $this->db->query($mandar);
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo"Estes dados não existem no sistema.";
} else {
    $reg = "INSERT INTO login(id, email, password) VALUES ('$id', '$email', '$password')";
    mysqli_query($con, $reg);
    echo"Registro realizado com Sucesso!";
}
    
?>