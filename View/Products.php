<?php

?>
<div class="row">
  <div class="col-12">
    <h1>ProductsPage</h1>
  </div>

<form class="col-12" action="./ProductsController/addProduct" method="post">
  <h2>Add a product</h2>
  <input class="col-3" name="productName" placeholder="Enter Product Name" required>
  <input class="col-3" name="productPrice" placeholder="Enter Product Price" required>
  <input class="col-2 addSubmit" type="submit" value="Add product!">
</form>

<form class="col-12" action="./ProductsController/searchProduct" method="post">
<h2>Search a product</h2>
<input class="col-6" name="productName" placeholder="Enter Product Name" required>
<input class="col-2 addSubmit" type="submit" value="Search product!">
</form>

  <table class="col-12">
    <tr class="col-12">
      <td class="col-2"><a href="./ProductsController/sortProduct/productName">Sort By Product</a></td>
      <td class="col-2"><a href="./ProductsController/sortProduct/productPrice">Sort By Price</a></td>
    </tr>
    <tr class="productsTableHeader col-12">

      <td class="col-2">Name</td>
      <td class="col-2">Price</td>
    </tr>

<?php


  foreach ($products as $row)
  {
    echo "<tr class='col-12'>";
    echo "<td class='col-2'>" . $row->productName  . "</td>";
    echo "<td class='col-2'>€ " . str_replace('.', ',', $row->productPrice)  . "</td>";
    echo "<td class='col-2'><a href='./ProductsController/loadEditProduct/".$row->productId.'/'.$row->productName.'/'.$row->productPrice."'>Edit</a></td>";
    echo "<td class='col-2'><a href='./ProductsController/deleteProduct/".$row->productId."'>Delete</a></td>";
    echo "</tr>";
  }

?>
  </table>
</div>
