<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '24'";
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
        <title>Gabinete NOX COOLBAY MX2 Micro ATX - Rexpeita</title>
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
                            - Marca: NOX
                            <br>
                            - Modelo: NXCBAYMX2
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Tipo: Mini Tower
                            <br>
                            - PSU: ATX Padrão (não incluso)
                            <br>
                            - Suporta VGA de 315 mm
                            <br>
                            - USB 3.0 de alta velocidade
                            <br>
                            - Suporte para HDD Interno: 2x 3.5"/2x 2.5"
                            <br>
                            - Suporte para HDD Externo: 1x 5.25"
                            <br>
                            - Cor: Preto
                            <br>
                            - Placa mãe suportada: Micro ATX
                            <br>
                            - CPU cooler: 160 mm
                            <br>
                            - Slots: 4
                            <br>
                            - Dimensões: 198 x 396 x 400 mm
                            <br>
                            <strong>Ventoinhas:</strong>
                            <br>
                            - Frontal: 1x 120 mm (Incluso)
                            <br>
                            - Traseiro: 1x 120 mm (Não incluso)
                            <br>
                            - Lateral: 1x 120/140 mm (Não incluso)
                            <br>
                            <strong>Portas:</strong>
                            <br>
                            - 1x USB 3.0
                            <br>
                            - 1x USB 2.0
                            <br>
                            - 1x áudio HD 
                            <br>
                            - 1x microfone
                            <br>
                            - Leitor de cartão: SD/ Micro SD
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Gabinete NOX COOLBAY MX2
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            3615 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>