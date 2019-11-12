<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = $_POST['email'];
$password = $_POST['password'];

$selecionat = ("SELECT * FROM users WHERE email = $email ");

$result = mysqli_query($mysqli,$selecionat);

$num = mysqli_num_rows($result);

if($num != 1 )
{
    header("Location:home");
}
else
{
    header("Location:login");

}
?>