
<form class="col-12" action="./ProductsController/editProduct" method="post">
<input class="col-3" name="id" value="<?php echo $productId; ?>" placeholder="<?php echo $productId; ?>" readonly>
<input class="col-3" name="name" placeholder="name">
<input class="col-3" name="price" placeholder="price">
<input type="submit" value="Send!">
</form>
