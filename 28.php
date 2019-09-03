<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '28'";
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
        <title>SSD Intel 600p, 128GB, M.2 PCIe NVMe 3.0 x4 - Rexpeita</title>
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
                            - Marca: Intel
                            <br>
                            - Modelo: SSDPEKKW128G7X1
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Capacidade: 128GB
                            <br>
                            - Fator de Forma:  M.2 22 x 80 mm
                            <br>
                            - Interface: PCIe NVMe 3.0 x4
                            <br>
                            <strong>Desempenho:</strong>
                            <br>
                            - Leitura sequencial (até): 770 MB/s
                            <br>
                            - Gravação aleatória (alcance de 8GB) (até): 91500 IOPS
                            <br>
                            - Gravação Sequencial (até): 450 MB/s
                            <br>
                            - Energia ativa: 100mW (Típica)
                            <br>
                            - Leitura aleatória (alcance de 8GB) (até): 35000 IOPS
                            <br>
                            - Energia Ociosa: 40 mW (Típica) 
                            <br>
                            <strong>Confiabilidade:</strong>
                            <br>
                            - Vibração operacional: 2.17 GRMS (5-700Hz) Max
                            <br>
                            - Classificação de resistência (gravações no período de vida): 72 TBW
                            <br>
                            - Vibração não operacional: 3.13 GRMS (5-800Hz) Max
                            <br>
                            - Tempo médio entre falhas (MTBF): 16 milhões de horas
                            <br>
                            - Faixa de temperatura operacional: 0ºC a 70ºC
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - SSD SSD Intel 660p 128GB
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