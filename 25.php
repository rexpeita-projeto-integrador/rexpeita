<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '25'";
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
        <title>Gabinete Gamer Corsair Obsidian Series 1000D - Rexpeita</title>
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
                            - Modelo: CC-9011148-WW
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Material: Aço, Alumínio, Vidro Temperado
                            <br>
                            - Slot de Expansão: 8x
                            <br>
                            - Fonte de Alimentação Compatível: ATX (não incluso)
                            <br>
                            - Tipo: Super-Tower
                            <br>
                            - Corsair Link Ativado
                            <br>
                            - Iluminação RGB
                            <br>
                            - Espaço para HD 5x 3.5"
                            <br>
                            - Espaço para SSD 6x 2.5"
                            <br>
                            <strong>Dimensões Internas:</strong>
                            <br>
                            - Comprimento máximo da GPU: 400 mm
                            <br>
                            - Comprimento Máximo da Fonte de Alimentação: 225 mm
                            <br>
                            - Altura máxima do cooler do processador: 180 mm
                            <br>
                            <strong>Ventoinhas:</strong>
                            <br>
                            - Frontal: 3x 120mm, 2x 140mm (3x LL120 RGB incluso)
                            <br>
                            - Superior: 2x 120mm, 2x 140mm (Não incluso)
                            <br>
                            - Traseiro: 120mm (Não incluso)
                            <br>
                            <strong>Compatibilidade do Radiador:</strong>
                            <br>
                            - 120 mm; 140 mm; 240 mm; 280 mm; 360 mm; 420 mm; 480 mm
                            <br>
                            <strong>Refrigeradores Líquidos:</strong>
                            <br>
                            - H55, H60, H75, H80i, H90, H100i, H105, H110i, H115i, H150i
                            <br>
                            <strong>Portas:</strong>
                            <br>
                            - 2x Portas USB 3.1 Gen-2 tipo-C
                            <br>
                            - 4x Portas USB 3.0
                            <br>
                            - Microfone e Fone
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Gabinete Corsair Obsidian 1000D Super
                            <br>
                            - Kit de Acessórios
                            <br>
                            - Guia Rápido
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            38140 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>