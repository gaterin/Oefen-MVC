<p class="col-3">Product:</p>
<p class="col-3">Location:</p>
<p class="col-3">Amount in stock:</p>
<form class="col-12" action="./StockController/editStock" method="post">

<input class="col-3" value="<?php echo $productName; ?>"  readonly>
<input class="col-3" value="<?php echo $locationName; ?>"  readonly>
<input class="col-3" name="amountInStock"  value="<?php echo $amountInStock; ?>" placeholder="Amount in stock">
<input class="col-3" type="hidden" name="productId" value="<?php echo $productId; ?>" readonly>
<input class="col-3" type="hidden" name="locationId" value="<?php echo $locationId; ?>" readonly>
<input class="col-3" type="submit" value="Update stock!">
</form>
