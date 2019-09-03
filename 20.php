<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '20'";
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
        <title>Fonte Corsair 550W 80 Plus Bronze CX550 - Rexpeita</title>
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
                            - Modelo: CP-9020121-WW
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - MTBF: 100,000 horas
                            <br>
                            - Nível de certificação 80 PLUS Bronze
                            <br>
                            - Power: 550W
                            <br>
                            - PFC Ativo
                            <br>
                            - Tecnologia de rolamentos do ventilador: Rifle
                            <br>
                            - Tamanho do ventilador: 120mm
                            <br>
                            - Temperatura nominal de saída contínua: 40°C
                            <br>
                            - Dimensões: 150 mm x 140 mm x 86 mm
                            <br>
                            - Tipo de cabo: Sleeved
                            <br>
                            - Plug Tipo: WW
                            <br>
                            - Entrada de CA: 100V - 240V
                            <br>
                            <strong>Conectores:</strong>
                            <br>
                            - Conector ATX: 1x
                            <br>
                            - Conector EPS: 1x
                            <br>
                            - Conector Floppy: 1x
                            <br>
                            - Conector 4-Pin: 4x
                            <br>
                            - Conector PCIe: 2x
                            <br>
                            - Conector SATA: 5x
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Fonte Corsair 550W 
                            <br>
                            - 04 parafusos de montagem
                            <br>
                            - Pack de Zip-ties
                            <br>
                            - Documento de Garantia
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            2135 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>