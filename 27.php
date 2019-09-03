<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '27'";
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
        <title>Gabinete Sharkoon TG5 Vidro Temperado - Rexpeita</title>
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
                            - Marca: Sharkoon
                            <br>
                            - Modelo: TG5
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Fator de forma: ATX
                            <br>
                            - Slots de expansão: 7
                            <br>
                            - Pintura interior
                            <br>
                            - Instalação de dispositivos sem ferramentas
                            <br>
                            - Sistema de gerenciamento de cabos
                            <br>
                            - Vidro temperado de alta qualidade
                            <br>
                            - Dimensões: 45,2 x 22,0 x 46,5 cm
                            <br>
                            <strong>Portas:</strong>
                            <br>
                            - USB 3.0 (Superior): 2 
                            <br>
                            - USB 2.0 (Top): 2
                            <br>
                            - Áudio (Top)
                            <br>
                            <strong>Baias de Transmissão:</strong>
                            <br>
                            - 3.5 ": 1
                            <br>
                            - 3,5 "ou 2,5": 2
                            <br>
                            - 2,5 ": 2
                            <br>
                            <strong>Ventiladores:</strong>
                            <br>
                            - Painel frontal: 3x ventilador LED de 120 mm (Incluso) ou radiador (Não incluso)
                            <br>
                            - Painel traseiro: 1x ventilador LED de 120 mm (Incluso)
                            <br>
                            - Painel superior: Ventilador de 3x 120 mm ou 2x 140 mm (Não incluso)
                            <br>
                            <strong>Compatibilidade:</strong>
                            <br>
                            - Placa mãe: Mini-ITX, Micro-ATX, ATXMax. Comprimento de cartões gráficos: 40,0 cm
                            <br>
                            - Max. Altura CPU Cooler: 16,7 cm
                            <br>
                            - Max. Comprimento da fonte de alimentação: 20,5 cm
                            <br>
                            - Max. Altura Radiador incl. Ventilador (Topo): 6,0 cm
                            <br>
                            - Max. Altura Radiador incl. Ventilador (Frente): 5,5 cm
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Gabinete Sharkoon TG5 Verde com Vidro Temperado
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            8700 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>