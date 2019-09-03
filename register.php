<?php require 'header.php'; ?>
<html>
    
    <head>
        <!-- Page Title -->
        <title>Criar Conta - Rexpeita</title>
        
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
        <form action="register_proc.php" method="POST">
            
        <div class="form-group">
            <label for="InputCPF">CPF:</label>
            <input type="text" name="cpf" class="form-control" aria-describedby="cpfHelp" placeholder="Digite seu CPF aqui...">
            <small id="cpfHelp" class="form-text text-muted">
                Exemplo: 12345678909
                <br>
                Use apenas números!
                <br>
                Seu CPF é de uso único no site e não pode ser repetido!
            </small>
          </div>
            
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
            <br>
          <div class="form-group">
            <label for="InputName">Nome Completo:</label>
            <input type="text" name="name" class="form-control" placeholder="Digite seu Nome completo aqui...">
          </div>
            <br>
          <div class="form-group">
            <label for="InputAddress">Endereço Completo:</label>
            <input type="text" name="address" class="form-control" aria-describedby="addressHelp" placeholder="Digite seu Endereço completo aqui...">
            <small id="addressHelp" class="form-text text-muted">
                Limite de 100 caracteres!
            </small>
          </div>
            
          <button type="submit" class="btn btn-primary">Registrar Conta</button>
        </form>
    </div>
    <!-- Login Form End -->             
        
    <div class="clear"></div>
        
<?php require 'footer.php'; ?> 