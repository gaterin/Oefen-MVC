<p class="col-3">Product ID:</p>
<p class="col-3">Product Name:</p>
<p class="col-3">Product Price:</p>
<form class="col-12" action="./ProductsController/editProduct" method="post">
<input class="col-3" name="productId" value="<?php echo $productId; ?>" placeholder="<?php echo $productId; ?>" readonly>
<input class="col-3" name="productName" value="<?php echo $productName; ?>" placeholder="<?php echo $productName; ?>">
<input class="col-3" name="productPrice" type="number" step="0.01" value="<?php echo $productPrice; ?>" placeholder="<?php echo $productPrice; ?>">
<input class="col-3" type="submit" value="Send!">
</form>
