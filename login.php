<?php require 'header.php'; ?>
<html>
    
    <head>
        <!-- Page Title -->
        <title>Acessar Minha Conta - Rexpeita</title>
        
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
        
    <br>
        
    <!-- Login Form -->    
    <div class="container-fluid">
        <form action="login_proc.php" method="POST">
          <div class="form-group">
            <label for="Email"><b>Email:</b></label>
            <input type="email" name="email" class="form-control" placeholder="Digite seu Email aqui..." required>
          </div>

          <div class="form-group">
            <label for="Password"><b>Senha:</b></label>
            <input type="password" name="password" class="form-control" placeholder="Digite sua Senha aqui..." required>
          </div>

          <button type="submit" class="btn btn-danger">Logar</button>
        </form>
        <a href="register.php"><button class="btn btn-danger">Criar Conta</button></a>
    </div>
    <!-- Login Form End -->    
    <br>    
           
        
    <div class="clear"></div>
        
<?php require 'footer.php'; ?>