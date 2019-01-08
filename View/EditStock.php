
<form class="col-12" action="./StockController/editStock" method="post">
<input class="col-3" name="productId" value="<?php echo $productId; ?>" placeholder="<?php echo $productId; ?>" readonly>
<input class="col-3" name="locationId" value="<?php echo $locationId; ?>" placeholder="<?php echo $locationId; ?>" readonly>
<input class="col-3" name="amountInStock"  value="<?php echo $amountInStock; ?>" placeholder="Amount in stock">
<input class="col-3"type="submit" value="Update stock!">
</form>
