<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location: login.php');
}

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'rexpeita';

?>

<?php require 'header.php'; ?>

<html>
    <head>
        <!-- Page Title -->
        <title>Bem vindo a Rexpeita</title>
        
    </head>
    
    <style>
        body {
        background-color: white;
        }
    </style>
    
    <body>
        <!-- Banner -->
        <div class="container-fluid" alt="banner" title="Propaganda" style="background-color: #333;">
            <img src="css/banner.jpg" class='banner' height="90px" width="100%" align='center'>
        </div>
        <!-- Banner End -->
        
        <div class="container-fluid bg-dark" style="height: 30px;"></div>
        
        <div class="container-fluid">
            <h1 style="background-color: crimson;">Você está logado com o email: <?php echo $_SESSION['email']; ?></h1>
            <br>
            <a href="index.php"><button class="btn btn-danger">Ir para Página Inicial</button></a>
            <br>
            <br>
            <a href="login.php"><button class="btn btn-danger">Ir para Página de Login</button></a>
            <br>
            <br>
            <a href="register.php"><button class="btn btn-danger">Ir para Página de Registro</button></a>
            <br>
            <br>
            <a href="logout.php"><button class="btn btn-danger">Deslogar</button></a>
        </div>
<?php require 'footer.php'; ?>
