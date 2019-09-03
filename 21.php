<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<?php
            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE id = '21'";
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
        <title>Fonte Nox 600W 80 Plus Bronze Semi-Modular - Rexpeita</title>
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
                            - Modelo: NXHMX600BZ
                            <br>
                            <strong>Especificações:</strong>
                            <br>
                            - Certificado 80 PLUS Bronze: 85% de eficiência mínima garantida
                            <br>
                            - Cabos semi-modulares
                            <br>
                            - Capacitores eletrolíticos de Taiwan certificados para trabalhos em 105ºC
                            <br>
                            - Fonte de alimentação ATX 12V 2.31 e EPS 12V 2.91 / 2.92 com PFC ativo
                            <br>
                            - Eco amigável, está em conformidade com as diretivas RoHS e ERP 2013
                            <br>
                            - Proteções OVP, SCP, OPP, SIP, UVP
                            <br>
                            - Cabos planos e extra longos
                            <br>
                            - Ventilador silencioso de 120 mm com controle de velocidade do ventilador
                            <br>
                            - Trilho único de + 12V
                            <br>
                            - Dimensões: 150 x 86 x 157,5 mm
                            <br>
                            - Entrada AC: 100-240 Vac, 63-47 Hz, 10-5A
                            <br>
                            - Saída DC: +12V / +3.3V / +5V / -12V / +5VSB
                            <br>
                            - Corrente máx de saída: 49A / 15A / 15A / 0.3A / 2.5A
                            <br>
                            - Potência máx combinada: 588W / 100W / 3.6W / 12.5W
                            <br>
                            - Potência máxima: 600W
                            <br>
                            <strong>Conectores:</strong>
                            <br>
                            - 24 pin ATX: Conector de força 1x 57cm
                            <br>
                            - EPS + 12: 4 + 4 pinos 1x 67 cm
                            <br>
                            - SATA: 7x 50cm
                            <br>
                            - PCIe: 6 + 2 pinos 1x 55cm / 1x 15 cm
                            <br>
                            - Molex: 4 pin 3x 50 cm
                            <br>
                            <strong>Conteúdo da Embalagem:</strong>
                            <br>
                            - Fonte NOX 600W Plus Bronze Semi Modular
                            <br>
                            <strong>Garantia:</strong>
                            <br>
                            12 meses de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)
                            <br>
                            <strong>Peso:</strong>
                            <br>
                            2485 gramas (bruto com embalagem)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

<?php require 'footer.php'; ?>