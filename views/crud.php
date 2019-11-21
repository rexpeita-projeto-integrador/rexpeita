<meta charset="utf-8">
<body>
<?php require_once 'crud_process.php'; ?>
    
    <?php
    if (isset($_SESSION['mensagem'])): ?>
    
    <div class="alert alert-<?=$_SESSION['msg_tipo']?>">
    
        <?php
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        ?>
    </div>
    
    <?php endif ?>
    
    <div class="container">
    
    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'rexpeita') or die(mysqli_error($mysqli));
        $result = $mysqli->query('SELECT * FROM products') or die($mysqli->error);
    ?>
    
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>ID da Categoria:</th>
                    <th>ID da Marca:</th>
                    <th>Nome:</th>
                    <th>Descrição:</th>
                    <th>Estoque:</th>
                    <th>Preço:</th>
                    <th>Preço Original:</th>
                    <th>Avaliação em Estrelas:</th>
                    <th>Produto em Destaque:</th>
                    <th>Promoção:</th>
                    <th>Mais Vendido:</th>
                    <th>Novo Produto:</th>
                    <th>Opções:</th>
                    
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
        <?php
          while ($row = $result->fetch_assoc()): ?>  
            <tr>
                <td><?php echo $row['id_category']; ?></td>
                <td><?php echo $row['id_brand']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['price_from']; ?></td>
                <td><?php echo $row['rating']; ?></td>
                <td><?php echo $row['featured']; ?></td>
                <td><?php echo $row['sale']; ?></td>
                <td><?php echo $row['bestseller']; ?></td>
                <td><?php echo $row['new_product']; ?></td>
                <td><?php echo $row['options']; ?></td>
                <td>
                    <a href="crud?editar=<?php echo $row['id']; ?>" class='btn btn-danger'>Editar</a>
                    <br>
                    <br>
                    <a href="crud_process?deletar=<?php echo $row['id']; ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    
    <?php
        
    ?>
    
    <div class="row justify-content-center">
    <form action="crud_process" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <label>ID da Categoria:</label>
        <input type="text" name="id_category" class="form-control" value="<?php echo $id_category; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>ID da Marca:</label>
        <input type="text" name="id_brand" class="form-control" value="<?php echo $id_brand; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Descrição:</label>
        <input type="text" name="description" class="form-control" value="<?php echo $description; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Estoque:</label>
        <input type="text" name="stock" class="form-control" value="<?php echo $stock; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Preço:</label>
        <input type="text" name="price" class="form-control" value="<?php echo $price; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Preço Original:</label>
        <input type="text" name="price_from" class="form-control" value="<?php echo $price_from; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Avaliação em Estrelas:</label>
        <input type="text" name="rating" class="form-control" value="<?php echo $rating; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Produto em Destaque:</label>
        <input type="text" name="featured" class="form-control" value="<?php echo $featured; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Promoção:</label>
        <input type="text" name="sale" class="form-control" value="<?php echo $sale; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Mais Vendido:</label>
        <input type="text" name="bestseller" class="form-control" value="<?php echo $bestseller; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Novo Produto:</label>
        <input type="text" name="new_product" class="form-control" value="<?php echo $new_product; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Opções:</label>
        <input type="text" name="options" class="form-control" value="<?php echo $options; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>ID do Produto:</label>
        <input type="text" name="id_product" class="form-control" value="<?php echo $id_product; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <label>Endereço da Imagem:</label>
        <input type="text" name="url" class="form-control" value="<?php echo $url; ?>" placeholder=""><br>
        </div>
        
        <div class="form-group">
        <?php 
        if ($update == true):
        ?>
            <button type="submit" class="btn btn-info" name="atualizar">Atualizar</button>
        <?php else: ?>
        <button type="submit" class="btn btn-danger" name="salvar">Salvar</button>
        <?php endif; ?>
        </div>
    </form>
    </div>
    </div>
</body>