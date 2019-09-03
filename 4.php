<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '4'";
            $result = mysqli_query($con, $query);

            if ($result) :
                if(mysqli_num_rows($result) > 0) :
                    while($product = mysqli_fetch_assoc($result)) :
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['price'];
                    $image = $product['image'];
                    
                    //print_r($product);
                    ?>

                    <?php
                    endwhile;
                endif;
            endif;
            ?>

<html>
    <meta charset="utf-8">
    
    <head>
        <title>Placa-Mãe Gigabyte Z370M Aorus Gaming - Rexpeita</title>
    </head>
    
    <body>
        <!-- Banner -->
        <div class="container-fluid" alt="banner" title="Propaganda" style="background-color: #333;">
            <img src="css/banner.jpg" class='banner' height="90px" width="100%" align='center'>
        </div>
        <!-- Banner End -->
        
        <div class="container-fluid bg-dark" style="height: 30px;"></div>
        <br>
        <!-- Product Info -->
        <div class="container-fluid">
            <div class="row">
                
                <!-- Product Image -->
                <div class="col-sm-5 sm-4">
                    <div class="card">
                        <img src="<?php echo $image; ?>" class="img-responsive2 card-img-top">
                    </div>
                </div>
                <!-- Product Image End -->
                
                <!-- Product Price -->
                <div class="col-sm-6 sm-5">
                    <br>
                    <h3 class="card-title">Preço do Produto</h3>
                        <h5 class="card-text">R$ <?php echo $price; ?> à vista</h5>
                    <form method="POST" action="cart.php?action=add&id=<?php echo $id; ?>">
                        <input type="text" name="quantity" class="form-control" value="1" />
                        <input type="hidden" name="name" value="<?php echo $name; ?>" />
                        <input type="hidden" name="price" value="<?php echo $price; ?>" />
                        <a href="#" class="btn btn-danger">
                            <input type="submit" name="add_to_cart" class="btn btn-danger" width="200px" height="200px" value="Adicionar ao Carrinho">
                            <i class="fas fa-cart-plus"></i>
                        </a>
                    </form>
                </div>
                <!-- Product Price End -->
            </div>
            
            <!--  -->
            <div class="row">
                <div class="card-body">
                    <div class="col-sm">
                        <h3 class="card-title">Descrição do Produto</h3>
                            <p class="card-text">
                            <strong>Características:</strong>
                            <br>
                            - Marca: Gigabyte
                            <br>
                            - Modelo: Z370M AORUS GAMING
                            <br>
                            <strong>CPU:</strong>
                            <br>
                            - Suporte para 8ª Geração Intel processadores Core i7 / Intel Core i5 / Intel Core i3 no pacote LGA1151
                            <br>
                            - O cache L3 varia com a CPU
                            <br>
                            <strong>Chipset:</strong>
                            <br>
                            - Intel Express Chipset Z370                            
                            <br>
                            <strong>Memória:</strong>
                            <br>
                            - 4x soquetes DIMM DDR4 que suportam até 64 GB de memória do sistema
                            <br>
                            - Arquitetura de memória de canal duplo
                            <br>
                            - Suporte para DDR4 4000(O.C.) / 3866(O.C.) / 3800(O.C.) / 3733(O.C.) / 3666(O.C.) / 3600(O.C.) / 3466(O.C.) / 3400(O.C.) / 3333(O.C.) / 3300(O.C.) / 3200(O.C.) / 3000(O.C.) / 2800(O.C.) / 2666 / 2400 / 2133 MHz memory modules
                            <br>
                            - Suporte para módulos de memória ECC Un-buffered DIMM 1Rx8 / 2Rx8 (operar em modo não ECC)
                            <br>
                            - Suporte para módulos de memória não DIMM 1Rx8 / 2Rx8 / 1Rx16 não-ECC
                            <br>
                            - Suporte para módulos de memória de perfil de memória Extreme (XMP)
                            <br>
                            <strong>Armazenamento:</strong>
                            <br>
                            - 1x M.2 connector (Socket 3, M key, type 2242/2260/2280/22110 SATA and PCIe x4/x2 SSD support) (M2A_32G)
                            <br>
                            - 1x M.2 connector (Socket 3, M key, type 2242/2260/2280 PCIe x4/x2 SSD support) (M2Q_32G)
                            <br>
                            - 6x SATA 6Gb/s connectors
                            <br>
                            - Suporte para RAID 0, RAID 1, RAID 5 e RAID 10
                            <br>
                            *Consulte "1-7 Conectores internos", para os avisos de instalação para os conectores M.2 e SATA.
                            <br>
                            - Intel Optane Memória Ready
                            <br>
                            <strong>Painel Traseiro:</strong>
                            <br>
                            - 1x Porta PS/2 keyboard/mouse
                            <br>
                            - 1x Porta DVI-D
                            <br>
                            - 1x Porta HDMI
                            <br>
                            - 1x Porta USB tipo-C, com suporte USB 3.1 Gen 1
                            <br>
                            - 6x Portas USB 3.1 Gen 1
                            <br>
                            - 1x Porta RJ-45
                            <br>
                            - 6x Tomadas de áudio (saída do alto-falante do centro / subwoofer, saída do alto-falante traseiro, saída do alto-falante lateral, entrada de linha, saída de linha, entrada de microfone)
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - 1x Placa Mãe Gigabyte
                            <br>
                            - 1x Driver de Instalação
                            <br>
                            - 1x Guia do Usuário
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia
                            (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            1050 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>