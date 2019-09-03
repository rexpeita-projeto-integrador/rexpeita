<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '23'";
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
        <title>Fonte Corsair 1600W 80 Plus Titanium Modular - Rexpeita</title>
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
                            - Marca: Corsair
                            <br>
                            - Modelo: CP-9020087-WW
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Capacidade de alternar singlemultiple 12V
                            <br>
                            - Versão: ATX12V v2.4
                            <br>
                            - Temperatura nominal de saída contínua C 50 ° C
                            <br>
                            - Tecnologia de rolamento: Rolamento Dinâmico Fluido
                            <br>
                            - Tamanho do ventilador: 140 mm
                            <br>
                            - MTBF 100.000 horas
                            <br>
                            - Pronto para multi-GPU
                            <br>
                            - Potência: 1600 Watts
                            <br>
                            - 80 PLUS Eficiência Titânio
                            <br>
                            - Fator de forma PSU ATX
                            <br>
                            - Modo Zero RPM
                            <br>
                            - Totalmente Modular
                            <br>
                            - Tipo de cabo Baixo perfil, todo preto
                            <br>
                            - Dimensões 150 x 86 x 200 mm
                            <br>
                            <strong>Conectores:</strong>
                            <br>
                            - 1x Conector ATX
                            <br>
                            - 2x Conectores EPS
                            <br>
                            - 2x Conectores de disquete
                            <br>
                            - 8x Conectores PCI-E
                            <br>
                            - 16x Conectores SATA 
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Fonte ATX Corsair 1600W 80 Plus Platinum
                            <br>
                            - Parafusos de montagem
                            <br>
                            - Abraçadeiras
                            <br>
                            - Manual do Usuário
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            5280 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>