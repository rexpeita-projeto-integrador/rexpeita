<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<html>
    <meta charset="utf-8">
    
    <head>
        <title>Memória RAM - Rexpeita</title>
    </head>
    
    <body>
        <!-- Banner -->
        <div class="container-fluid" alt="banner" title="Propaganda" style="background-color: #333;">
            <img src="css/banner.jpg" class='banner' height="90px" width="100%" align='center'>
        </div>
        <!-- Banner End -->
        
        <div class="container-fluid bg-dark" style="height: 30px;"></div>
        
        <br>
        <div class="container row">
            <?php

            $con = mysqli_connect('localhost','root','');

            mysqli_select_db($con, 'rexpeita');

            $query = "SELECT * FROM `products` WHERE category = 'ram'";

            $result = mysqli_query($con, $query);

            if ($result) :
                if(mysqli_num_rows($result) > 0) :
                    while($product = mysqli_fetch_assoc($result)) :
                    //print_r($product);
                    ?>
                        <div class="col-sm-6 col-md-5 col-lg-4">
                                <form method="POST" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
                                    <div class="products">
                                        <a href="<?php echo $product['id']; ?>.php"><img src="<?php echo $product['image']; ?>" class="img-responsive"></a>
                                        <hr>
                                        <h4><?php echo $product['name']; ?></h4>
                                        <br>
                                        <h4 class="text-warning">R$ <?php echo $product['price']; ?></h4>
                                        <hr>
                                        <input type="text" name="quantity" class="form-control" value="1" />
                                        <input type="hidden" name="name" value="<?php echo $product['name']; ?>" />
                                        <input type="hidden" name="price" value="<?php echo $product['price']; ?>" />
                                        <br>
                                        <a href="#" class="btn btn-danger" >
                                            <input type="submit" name="add_to_cart" class="btn btn-danger" id="a"  value="Adicionar ao Carrinho"  style="padding:0px; padding-right:1px;">
                                            <i class="fas fa-cart-plus"   style="padding:0px; padding-right:1px;"></i>
                                        </a>
                                    </div>
                                    </form>
                            </div>
                    <?php
                    endwhile;
                endif;
            endif;
            ?>
        </div> 
        
        <div class="clear"></div>
        
    <?php require 'footer.php'; ?>