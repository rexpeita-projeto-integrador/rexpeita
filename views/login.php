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

          <button type="submit" class="btn btn-danger">Logar</button>
        </form>
        <br>
        <a href="register"><button class="btn btn-danger">Criar Conta</button></a>
    </div>
    <!-- Login Form End -->    
    <br>    
           
        
    <div class="clear"></div>