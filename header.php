<html>
    <!-- Meta -->
	<meta charset="UTF-8">
	<meta name="description" content="Rexpeita">
	<meta name="keywords" content="Rexpeita">
	<meta name="author" content="Yuri Portela Teixeira">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/cart.css"/>
    
    <!-- Javascript -->
    <script type="text/javascript" src="javascript/javascript.js"></script>
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    
<head>
    
</head>
       
    <body>
        <!-- Top Bar -->
        <div class="container-fluid top-bar">
            
            <!-- 1 Row -->
            <div class="row">
                
                <!-- Social Networks -->
            <div clss="row" id='teste'>
                <div class="col-sm social-network float-left">
                    <a href="https://www.facebook.com" target="_blank" alt="Facebook da Rexpeita" title="Facebook da Rexpeita"><i class="fab fa-facebook-square fa-3x"></i></a>
                
                    <a href="https://www.twitter.com" target="_blank" alt="Twitter da Rexpeita" title="Twitter da Rexpeita"><i class="fab fa-twitter-square fa-3x"></i></a>
                    
                    <a href="#" alt="Brasil" title="Brasil" width=6px height=40px border=0><img src="img/Flag_Brazil.png" class="bandeira" width=60px height=40px border=0></a>
                    
                    <a href="#" alt="Argentina" title="Argentina - Em breve..." width=60px height=40px border=0><img src="img/Flag_Argentina.png" class="bandeira" width=60px height=40px border=0></a>
                </div>
            </div>   
                <!-- Service Center -->
                <div class="col-sm service-center float-right" id="teste">
                    <a href="home.php" alt="Minha Conta" title="Minha Conta"><i class="fas fa-user-circle fa-3x"></i></a>
                
                    <a href="cart.php" alt="Carrinho de Compras" title="Carrinho de Compras"><i class="fas fa-shopping-cart fa-3x"></i></a>
                </div>
         
            <!-- 1 Row End -->    
            </div>
        </div>
        <!-- Top Bar End -->
        
        <!-- Fluid Logo Container -->
        <div class="container-fluid">
            
            <!-- 1 Row -->
            <div class="row">
                
                <!-- Column Logo Container -->
                <div class="col-sm logo-container">
                    <a href="index.php"><img src="img/rexpeita.png" class="img-fluid float-left" height="100" width="200px"></a>
                    
                    <!-- Search Bar -->
                    <div class="row">
                        <div class="form-group">
                            <div class="input-group mb-3" id=search>
                                <input type="text"  name="search" placeholder="Digite aqui para buscar..."class="form-control">
                                <div class="input-group-append">
                                    <button class="btn  bg-dark" type="submit" style="color:white;">Enviar</button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- 1 Row End -->
            </div>
        </div>
        <!-- Fluid Logo Container End -->
        
        <!--Nav bar-->
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
            <a class="navbar-brand" href="all.php">Inicio</a>
        <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
             </button>
        <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="processadores.php">Processadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="placas-mae.php">Placa-Mãe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ram.php">Memória Ram</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="hd.php">Disco Rígido (HD)</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="ssd.php">Disco de Estado Sólido (SSD)</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link"  href="m2.php">NVMe PCIe (M.2)</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link"   href="fonte.php">Fonte</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="gabinete.php">Gabinete</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="graphicscard.php">Placa de Vídeo</a>
                    </li> 
                </ul>
            </div> 
        </nav>

       
        <?php
        $con = new PDO("mysql:host=localhost;dbname=rexpeita", 'root', '');
            
        if (isset($_POST["submit"])) {
            $str = $_POST["search"];
            $sth = $con->prepare("SELECT * FROM `products` WHERE name LIKE '%$str%'");
             
            $sth->setFetchMode(PDO:: FETCH_OBJ);
            $sth -> execute();
             
            if($row = $sth->fetch())
            {
                ?>
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                    </tr>
                    <tr>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->price; ?></td>
                    </tr>

                </table>
        <?php    
             }
            
        else{
            echo "Name Does not exist";
        }
}
 
?>