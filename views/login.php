<?php

if((!isset ($_SESSION['email']) == true) && (isset ($_SESSION['password']) == true))
{
  header('location:myaccount');
}

?>

<html>
   
    
    <head>
        <!-- Page Title -->
        <title>Acessar Minha Conta - Rexpeita</title>
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
    </head>
    
    <style>
        body {
        background-color: #b8b8b8;
        }
    </style>
    
    <body>
        
        <div class="container-fluid bg-dark" style="height: 30px;"></div>
        
    <!-- Login Form -->    
    <div class="container-fluid">
        <form action="login_proc" method="POST">
          <div class="form-group">
            <label for="Email"><b>Email:</b></label>
            <input type="email" name="email" class="form-control" placeholder="Digite seu Email aqui..." required>
          </div>

          <div class="form-group">
            <label for="Password"><b>Senha:</b></label>
            <input type="password" name="password" class="form-control" placeholder="Digite sua Senha aqui..." required>
          </div>

          <button type="submit" class="btn x">Logar</button>
        </form>
        <br>
        <a href="register"><button class="btn x">Criar Conta</button></a>
    </div>
    <!-- Login Form End -->    
    <br>    
           
        
    <div class="clear"></div>