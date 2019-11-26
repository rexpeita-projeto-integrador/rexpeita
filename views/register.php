<html>
    
    <head>
        <!-- Page Title -->
        <title>Criação de Conta - Rexpeita</title>
        
    </head>
    
    <style>
        body {
        background-color: white;
        }
    </style>
    
    <body>
        
    <br>
        
    <!-- Login Form -->    
    <div class="container-fluid">
        <form action="register_proc" method="POST">
            
        <div class="form-group">
          <div class="form-group">
            <label for="InputEmail">Email:</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite seu Email aqui...">
            <small id="emailHelp" class="form-text text-muted">
                Exemplo: rexpeita@gmail.com 
                <br>
                Seu Email é de uso único no site e não pode ser repetido!
            </small>
          </div>

          <div class="form-group">
            <label for="InputPassword">Senha:</label>
            <input type="password" name="password" class="form-control" placeholder="Digite sua Senha aqui...">
          </div>
            Nós nunca compartilharemos suas Informações.
            <br>
          </div>
            
          <button type="submit" class="btn btn-primary">Registrar Conta</button>
        </div>
        </form>
    </div>
    <!-- Login Form End -->             