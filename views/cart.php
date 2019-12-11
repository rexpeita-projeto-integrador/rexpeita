<h1>Carrinho de Compras</h1>

<table border="0" width="100%">
	<tr>
		<th width="100">Imagem</th>
		<th>Nome</th>
		<th width="50">Qtd.</th>
		<th width="120">Preço</th>
		<th width="20"></th>
	</tr>
	<?php
	$subtotal = 0;
	?>
	<?php foreach($list as $item): ?>
	<?php
	$subtotal += (floatval($item['price']) * intval($item['qt']));
	?>
	<tr>
		<td><img src="<?php echo BASE_URL; ?>media/products/<?php echo $item['image']; ?>" width="80" /></td>
		<td><?php echo $item['name']; ?></td>
		<td><?php echo $item['qt']; ?></td>
		<td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
		<td><a href="<?php echo BASE_URL; ?>cart/del/<?php echo $item['id']; ?>"><img src="<?php echo BASE_URL; ?>assets/images/delete.png" width="15" /></a></td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="3" align="right">Sub-total:</td>
		<td><strong>R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></strong></td>
	</tr>
</table>

<hr>
Digite o seu Cep:<br>
<form method="post">
    <input type="number" name="cep"><br>
    <input type="submit" name="calcular"><br>
</form>