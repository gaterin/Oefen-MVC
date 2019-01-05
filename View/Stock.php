<?php

?>
<div class="row">
  <div class="col-12">
    <h1>Products Stock Page</h1>
  </div>
  <div class="col-3">
</div>
<div class="col-3">
</div>
<div class="col-3">
</div>
<div class="col-3">
</div>
  <table class="col-12">
    <tr class="productsTableHeader col-12">
      <td class="col-2">Product ID</td>
      <td class="col-2">Product Name</td>
      <td class="col-2">Stock Location</td>
      <td class="col-2">Stock</td>


    </tr>

<?php
  // var_dump($stock);
  foreach ($stock as $row)
  {
    echo "<tr class='col-12'>";
    echo "<td class='col-2'>" . $row->productId . "</td>";
    echo "<td class='col-2'>" . $row->productName  . "</td>";
    echo "<td class='col-2'>" . $row->locationName  . "</td>";
    echo "<td class='col-2'>" . $row->amountInStock  . "</td>";
    // echo "<td class='col-2'><a href='./StockController/loadEditProduct/".$row->productId." '>Edit</a></td>";
    // echo "<td class='col-2'><a href='./ProductsController/deleteProduct/".$row->productId."'>Delete</a></td>";
    echo "</tr>";
  }

?>
  </table>
</div>
