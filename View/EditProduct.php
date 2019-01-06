
<form class="col-12" action="./ProductsController/editProduct" method="post">
<input class="col-3" name="productId" value="<?php echo $productId; ?>" placeholder="<?php echo $productId; ?>" readonly>
<input class="col-3" name="productName" placeholder="name">
<input class="col-3" name="productPrice" placeholder="price">
<input type="submit" value="Send!">
</form>
