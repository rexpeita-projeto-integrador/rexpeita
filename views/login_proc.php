<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'rexpeitav2');

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "SELECT * FROM login WHERE email = '$email' && password = '$password' ";
$mandar = "INSERT INTO  users  SET '$id' = id, '$email' = email,  '$password' = password"; 


$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['id'] = $id;
    header('location:home.php');
} else {
    header('location:login.php');
}
    
?>

