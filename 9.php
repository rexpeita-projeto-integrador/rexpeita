<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '9'";
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
        <title>Placa-Mãe MSI MAG Z390 Tomahawk - Rexpeita</title>
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
                            - Marca: MSI
                            <br>
                            - Modelo: MAG Z390 Tomahawk
                            <br>
                            <strong>CPU:</strong>
                            <br>
                            - Suporta processadores Intel Núcleo 9000 Series família / 8th Gen Intel Núcleo / Pentium Gold / Celeron processadores para LGA 1151 soquete                        
                            <br>
                            <strong>Chipset:</strong>
                            <br>
                            - Intel Chipset Z390                         
                            <br>
                            <strong>Memória:</strong>
                            <br>
                            - 4 x slots de memória DDR4, suporta até 64GB
                            <br>
                            - Suporta DDR4 4400 (OC) / 4300 (OC) / 4266 (OC) / 4200 (OC) / 4133 (OC) / 4000 (OC) / 3866 (OC) / 3733 (OC) / 3600 (OC) / 3466 (OC ) / 3400 (OC) / 3333 (OC) / 3300 (OC) / 3200 (OC) / 3000 (OC) / 2800 (OC) / 2666/2400/2133 MHz *
                            <br>
                            - Suporta o modo de canal duplo
                            <br>
                            - Suporta memória não-ECC no-tamponada
                            <br>
                            - Suporta processadores Intel Extreme Memory Profile (XMP)
                            <br>
                            <strong>Armazenamento:</strong>
                            <br>
                            - 6 portas SATA de 6 Gb / s * 1
                            <br>
                            - 2x slots M.2 (tecla M) * 1
                            <br>
                            - M2_1 suporta dispositivos de armazenamento PCIe 3.0 x4 e SATA 6Gb / s, 2242/2260/2280/22110
                            <br>
                            - M2_2 Suporta dispositivos de armazenamento PCIe 3.0 x4 e SATA 6Gb / s, 2242/2260/2280
                            <br>
                            - Memória Intel Optane 
                            <br>
                            <i>1. Slots M.2 e portas SATA compartilham a largura de banda. Por favor, consulte o manual do usuário para detalhes.</i>
                            <br>
                            <i>2. Antes de usar os módulos de memória Intel ® Optane ™, certifique-se de atualizar os drivers e o BIOS para a versão mais recente no site da MSI.</i>
                            <br>
                            <strong>Painel Traseiro:</strong>
                            <br>
                            - Porta Combo PS / 2
                            <br>
                            - Porta LAN
                            <br>
                            - Conectores de áudio HD
                            <br>
                            - Porta USB 2.0
                            <br>
                            - DisplayPort
                            <br>
                            - Porta HDMI
                            <br>
                            - USB 3.1 Gen2 Tipo A
                            <br>
                            - USB 3.1 Gen2 Tipo A + C
                            <br>
                            - Saída Óptica S / PDIF
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - 1x Placa Mãe MSI
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
                            1615 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>