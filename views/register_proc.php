<?php

$mysqli = new mysqli('localhost','root','', 'rexpeita') or die(mysqli_error($mysqli));

$email = $_POST['email'];
$password = $_POST['password'];
$pass = "";




try {
    $pass = sha1($senha);
    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$pass'";
    $sql = $pdo->query($sql);
    
    echo "Dados inseridos com sucesso: ".$pdo->lastInsertId();
    } catch(PDOException $e) {
        
        echo "Error ". $e->getMessage();
    }

    $login = "SELECT * FROM users WHERE email = '$email' && password = '$senha' ";
    $verifica = "SELECT * FROM users WHERE administra = '$verifica' ";
    $resultverifica = mysqli_query($mysqli, $verifica);
    
    $result = mysqli_query($mysqli, $login);
    
    $num = mysqli_num_rows($result);
    
    if($num == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
            if($resultverifica == 1)
            {
                header("Location:myaccountadm");
            } else {
                header("Location:home");
            }
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('location:login');
    }
    
    
?>