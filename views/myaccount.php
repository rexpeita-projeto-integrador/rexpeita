<?php 
    
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['password']) == true))
{

  header('location:home');
  }
 
$logado = $_SESSION['email'];
?>

<head>
<title>Minha Conta - Rexpeita</title>
</head>
 
<body>

<?php
  echo" Bem vindo $logado";
?>

<?php
echo '<br>Sessões:<br>';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>

<a href="myaccountadm"><button class="btn btn-danger">Ir para a página de ADM</button></a>
    
</body>