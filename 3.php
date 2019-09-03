<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '3'";
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
        <title>Placa-Mãe ASRock A320M-HD mATX AM4 - Rexpeita</title>
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
                            - Marca: ASRock
                            <br>
                            - Modelo: A320M-HD
                            <br>
                            <strong>CPU:</strong>
                            <br>
                            - Suporta APUs AMD Soquete AM4 Série-A (Bristol Ridge) e CPUs Série Ryzen (Summit Ridge e Raven Ridge)
                            <br>
                            - Design Digi Power
                            <br>
                            - Design Power Phase 7
                            <br>
                            - Suporta CPU de até 65W
                            <br>
                            <strong>Chipset:</strong>
                            <br>
                            - AMD Promontory A320
                            <br>
                            <strong>Memória:</strong>
                            <br>
                            - Tecnologia de memória DDR4 Dual Channel
                            <br>
                            - 2 x DDR4 slots DIMM
                            <br>
                            - CPUs AMD série Ryzen suportam memória DDR4 3200+(OC) / 2933(OC) / 2667/2400/2133 ECC & não-ECC, sem-buffer*
                            <br>
                            - APUs AMD Série-A de 7ª Geração suportam memória DDR4 2400/2133 ECC & não-ECC, sem-buffer**
                            <br>
                            - Capacidade máxima de memória do sistema: 32GB**
                            <br>
                            <strong>Armazenamento:</strong>
                            <br>
                            - 4 x conectores SATA3 6.0 Gb/s, suportando RAID (RAID 0, RAID 1 e RAID 10), NCQ, AHCI e Hot Plug
                            <br>
                            - 1 x Soquete Ultra M.2, suporta módulos M Key 2242/2260/2280 M.2 SATA3 6.0 Gb/s e módulos M.2 PCIe até Gen3 x4 (32 Gb/s) (com CPU Série Ryzen) ou Gen3 x2 (16 Gb/s) (com APU Série-A)*
                            <br>
                            *SSD NVMe como discos de boot
                            <br>
                            Suporta ASRock U.2 Kit
                            <br>
                            <strong>Painel Traseiro:</strong>
                            <br>
                            - 1 x Porta de Mouse / Teclado PS/2
                            <br>
                            - 1 x Porta D-Sub
                            <br>
                            - 1 x Porta HDMI
                            <br>
                            - 2 x portas USB 2.0 (Suporta Proteção Contra ESD)
                            <br>
                            - 4 x portas USB 3.1 Gen1 (Suporta Proteção Contra ESD)
                            <br>
                            - 1 x Porta de Rede RJ-45 com LED (LED de Acesso e LED de Velocidade)
                            <br>
                            - conectores de Áudio HD: Entrada de Linha / Alto-Falante Frontal / Microfone
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - 01 Placa-Mãe ASRock
                            <br>
                            - 01 Guia Rápido de Instalação
                            <br>
                            - 01 CD de Suporte
                            <br>
                            - 01 Protetor E/S (espelho)
                            <br>
                            - 02 Cabos de dados SATA
                            <br>
                            - 01 Parafuso para o Soquete M.2
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia
                            (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            745 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>