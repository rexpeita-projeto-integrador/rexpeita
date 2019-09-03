<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '16'";
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
        <title>SSD Kingston A400, 120GB SATA 3 - Rexpeita</title>
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
                            - Marca: Kingston
                            <br>
                            - Modelo: SA400S37/120G
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Formato: 2,5 pol 
                            <br>
                            - Interface: SATA Rev. 3.0 (6Gb/s) — compatível com a versão anterior SATA Rev. 2.0 (3Gb/s)
                            <br>
                            - Capacidades: 120GB
                            <br>
                            - NAND: TLC 
                            <br>
                            - Performance de referência - até 500MB/s para leitura e 320MB/s para gravação 
                            <br>
                            - Temperatura de armazenamento: -40 °C a 85 °C 
                            <br>
                            - Temperatura de operação: 0 °C a 70 °C
                            <br>
                            - Vibração quando em operação: 2,17G pico (7 – 800 Hz)
                            <br>
                            - Vibração quando não está em operação: 20G pico (10 – 2000 Hz)
                            <br>
                            - Expectativa de vida útil: 1 milhão de horas MTB
                            <br>
                            <strong>Benefícios</strong>
                            <br>
                            - 10x mais rápido do que um disco rígido: Com incríveis velocidades de leitura/gravação, o SSD A400 não somente irá aumentar o desempenho, como também poderá ser usado para dar vida nova em computadores mais antigos. 
                            <br>
                            - Robusto: O A400 é resistente a impactos e vibrações, para confiabilidade reforçada em notebooks e outros dispositivos móveis. 
                            <br>
                            - Ideal para desktops e notebooks: A400 tem um formato de 7 mm para se ajustar a uma grande variedade de computadores. É ideal para notebooks mais finos e computadores, ultrabooks e ultratop com espaço limitado.
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - SSD Kingston A400 120GB
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia
                            (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            70 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>