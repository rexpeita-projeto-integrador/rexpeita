<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'rexpeita') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
    $id_category = '';
    $id_brand = '';
    $name = '';
    $description = '';
    $stock = '';
    $price = '';
    $price_from = '';
    $rating = '';
    $featured = '';
    $sale = '';
    $bestseller = '';
    $new_product = '';
    $options = '';
    $url = '';

if (isset($_POST['salvar'])) {
    $id_category = $_POST['id_category'];
    $id_brand = $_POST['id_brand'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $price_from = $_POST['price_from'];
    $rating = $_POST['rating'];
    $featured = $_POST['featured'];
    $sale = $_POST['sale'];
    $bestseller = $_POST['bestseller'];
    $new_product = $_POST['new_product'];
    $options = $_POST['options'];
    $url = $_POST['url'];
    
    $mysqli->query("INSERT INTO products (id_category, id_brand, name, description, stock, price, price_from, rating, featured, sale, bestseller, new_product, options) VALUES('$id_category', '$id_brand', '$name', '$description', '$stock', '$price', '$price_from', '$rating', '$featured', '$sale', '$bestseller', '$new_product', '$options') ") or
        die($mysqli->error);
    
    $mysqli->query("INSERT INTO products_images (id_product, url) VALUES('$id_product' ,'$url') ") or
        die($mysqli->error);
    
    $_SESSION['mensagem'] = "Produto cadastrado com Sucesso!";
    $_SESSION['msg_tipo'] = "success";
    
    header('location: crud');
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];
    
    $mysqli->query("DELETE FROM products where id=$id") or die($mysqli->error());
    $mysqli->query("DELETE FROM products_images where id=$id") or die($mysqli->error());
    
    $_SESSION['mensagem'] = "Produto deletado com Sucesso!";
    $_SESSION['msg_tipo'] = "danger";
    
    header('location: crud');

}

if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
    $update = true;
    
    $result = $mysqli->query("SELECT * FROM products where id=$id") or die($mysqli->error());
    
    if (count($result)==1) {
        $row = $result->fetch_array();
            $id_category = $row['id_category'];
            $id_brand = $row['id_brand'];
            $name = $row['name'];
            $description = $row['description'];
            $stock = $row['stock'];
            $price = $row['price'];
            $price_from = $row['price_from'];
            $rating = $row['rating'];
            $featured = $row['featured'];
            $sale = $row['sale'];
            $bestseller = $row['bestseller'];
            $new_product = $row['new_product'];
            $options = $row['options'];
    }
}

if (isset($_POST['atualizar'])) {
    $id = $_POST['id'];
    $id_category = $_POST['id_category'];
    $id_brand = $_POST['id_brand'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $price = $_POST['price'];
    $price_from = $_POST['price_from'];
    $rating = $_POST['rating'];
    $featured = $_POST['featured'];
    $sale = $_POST['sale'];
    $bestseller = $_POST['bestseller'];
    $new_product = $_POST['new_product'];
    $options = $_POST['options'];
    $url = $_POST['url'];
    
    $mysqli->query("UPDATE products SET id_category='$id_category', id_brand='$id_brand', name='$name', description='$description', stock='$stock', price='$price', price_from='$price_from', rating='$rating', featured='$featured', sale='$sale', bestseller='$bestseller', new_product='$new_product', options='$options' where id=$id") or die($mysqli->error);
        
    $mysqli->query("UPDATE products_images SET url='$url' where id=$id") or die($mysqli->error);
    
    $_SESSION['mensagem'] = 'Produto atualizado com sucesso';
    $_SESSION['tipo_msg'] = 'warning';
    
    header('location: crud');

}
?>

<a href="crud"><button class="btn btn-danger">Ir para o CRUD</button></a>