<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '8'";
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
        <title>Placa-Mãe Gigabyte GA-A320M-S2H - Rexpeita</title>
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
                            - Modelo: GA-A320M-S2H
                            <br>
                            <strong>CPU:</strong>
                            <br>
                            - Processador AMD Ryzen
                            <br>
                            - Processador AMD 7ª Geração A / série Athlon 
                            <br>
                            <strong>Chipset:</strong>
                            <br>
                            - AMD A320                           
                            <br>
                            <strong>Memória:</strong>
                            <br>
                            - 2 x soquetes DIMM DDR4 que suportam até 32 GB de memória do sistema
                            <br>
                            - Arquitetura de memória de canal duplo
                            <br>
                            - Suporte para módulos de memória DDR4 3200 (OC) / 2933 (OC) / 2667 * / 2400/2133 MHz  * O suporte real pode variar de acordo com a CPU.
                            <br>
                            - Suporte para módulos de memória ECC Un-buffered DIMM 1Rx8 / 2Rx8 (operar em modo não ECC)
                            <br>
                            - Suporte para módulos de memória não DIMM 1Rx8 / 2Rx8 / 1Rx16 não-ECC
                            <br>
                            - Suporte para módulos de memória de perfil de memória Extreme (XMP)
                            <br>
                            <strong>Armazenamento:</strong>
                            <br>
                            - 1 conector M.2 (soquete 3, chave M, tipo 2242/2260/2280/22110 SATA e PCIe x4 / x2 * suporte SSD) * O suporte real pode variar de acordo com a CPU. * Suporta apenas SSDs M.2 SATA ao usar um processador AMD 7 th Generation A ou Athlon
                            <br>
                            - 4 x conectores SATA de 6 Gb / s
                            <br>
                            - Suporte para RAID 0, RAID 1 e RAID 10 * Consulte "1-7 Conectores internos", para os avisos de instalação para o conector M.2.
                            <br>
                            <strong>Painel Traseiro:</strong>
                            <br>
                            - 1 porta de teclado x PS / 2
                            <br>
                            - 1 porta do mouse PS / 2
                            <br>
                            - 1 Porta D-Sub
                            <br>
                            - 1 porta DVI-D
                            <br>
                            - 1 porta HDMI
                            <br>
                            - 4 portas USB 3.1 Gen 1
                            <br>
                            - 2 portas USB 2.0 / 1.1
                            <br>
                            - 1 porta  RJ-45
                            <br>
                            - 3 tomadas de áudio (Line In, Line Out, Mic In)
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - 1x Placa Mãe Gigabyte
                            <br>
                            - 1x Driver de Instalação
                            <br>
                            - 1x Guia do Usuário
                            <br>
                            <i><strong>OBS: </strong>Para a utilização da série Ryzen Pinnacle Ridge é necessário efetuar a atualização de BIOS com o boot kit que pode ser solicitado pelo site (support.amd.com/en-us/kb-articles/Pages/2Gen-Ryzen-AM4-System-Bootup.aspx)</i>
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia
                            (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            695 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>