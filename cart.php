<?php
session_start();
$product_ids = array();
//session_destroy();
// See if Add to Cart button is checked
if(filter_input(INPUT_POST, 'add_to_cart')) {
    if(isset($_SESSION['shopping_cart'])) {
        // Shopping Cart Array Size
        $count = count($_SESSION['shopping_cart']);
        
        // Match Array keys to id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
        $_SESSION['shopping_cart'][$count] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
        } else {
            // Match Array keys to id's added to existing shopping cart
            for ($i = 0; $i < count($product_ids); $i++) {
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) {
                    // Add item quantity to Array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    } else { // To create Shopping Cart Array
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}
if(filter_input(INPUT_GET, 'action') == 'delete') {
    //loop til product with same id as array
    foreach($_SESSION['shopping_cart'] as $key => $product) {
        if ($product['id'] == filter_input(INPUT_GET, 'id')) {
            // Remove product from shopping cart
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    // Reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<!DOCTYPE html>
<meta charset="utf-8">
<?php require 'header.php'; ?>

<html>
    <meta charset="utf-8">
    
    <head>
        <title>Carrinho de Compras - Rexpeita</title>
    </head>
    
    <body>
        <!-- Banner -->
        <div class="container-fluid" alt="banner" title="Propaganda" style="background-color: #333;">
            <img src="css/banner.jpg" class='banner' height="90px" width="100%" align='center'>
        </div>
        <!-- Banner End -->
        
        <div class="container-fluid bg-dark" style="height: 30px;"></div>
            <div class="clear"></div>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <tr><th colspan="5"><h3>Carrinho de Compras</h3></th></tr>
                    <tr>
                       <th width="40%">Nome do Produto</th>
                       <th width="10%">Quantidade</th>
                       <th width="20%">Preço</th>
                       <th width="15%">Total</th>
                       <th width="5%">Ação</th>
                    </tr>
                    <?php 
                    if(!empty($_SESSION['shopping_cart'])):
                    
                        $total = 0;
                        
                        foreach($_SESSION['shopping_cart'] as $key => $product):
                    ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['quantity']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>
                        <td>
                            <a href="cart.php?action=delete&id=<?php echo $product['id']; ?>">
                                <div class="btn btn-danger">Remover</div>
                            </a>
                        </td>
                    </tr>
                    <?php
                        $total = $total + ($product['quantity'] * $product['price']);
                        endforeach;
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">R$<?php echo number_format($total, 2); ?></td>
                    </tr>
                    <tr>
                        <!-- Show if shopping cart is empty -->
                        <td colspan="5">
                            <?php
                                if (isset($_SESSION['shopping_cart']));
                                if (count($_SESSION['shopping_cart']) > 0):
                            ?>
                                <a href="#" class="btn btn-danger">Prosseguir com Pagamento</a>
                            <?php endif; endif; ?>
                        </td>
                    </tr>
                </table>
            </div>
    </body>
    
</html>

<?php require 'footer.php'; ?>