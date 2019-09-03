<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '19'";
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
        <title>Fonte One Power 500W PFC Passivo White Plus - Rexpeita</title>
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
                            - Marca: OnePower
                            <br>
                            - Modelo: MP500W3-I
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Padrão: ATX (70%)
                            <br>
                            - Potência: 500W
                            <br>
                            - Cabos com malha (sleeve) de proteção
                            <br>
                            - Botão de liga / desliga no painel traseiro e Seletor de Voltagem
                            <br>
                            - Pfc Passivo
                            <br>
                            - Alimentação: Bivolt (manual)
                            <br>
                            - Padrão: ATX Versão 2.01
                            <br>
                            - Eficiência: Máxima: 70%
                            <br>
                            - Refrigeração: 1 Cooler 14cm
                            <br>
                            <strong>Recursos:</strong>
                            <br>
                            - Fonte padrão ATX com 24 pinos (20 + 4 pinos), podendo ser usada em placas mãe de 20 ou 24 pinos no cabo de alimentação.
                            <br>
                            - Fan de 140 x 140 mm, diminuindo a propagação de ruídos e sons incomodáveis.
                            <br>
                            - Entrada de alimentação para linha dupla (dual processor).
                            <br>
                            - Excelente combinação de qualidade, performance e valor.
                            <br>
                            - Eles são pintados em preto fosco e os cabos são protegidos por uma malha de nylon de alta resistência.
                            <br>
                            <strong>Cabos:</strong>
                            <br>
                            - 1 x 20+4 pinos (com Sleeve)
                            <br>
                            - 1 x 6+2 pinos PCI Express
                            <br>
                            - 1 x 8 Pinos (4+4 placa mãe)
                            <br>
                            - 2 x Molex
                            <br>
                            - 1 x Floppy
                            <br>
                            - 3 x Sata
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Fonte OnePower 500W
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            3 meses de garantia (correspondente à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            1295 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>