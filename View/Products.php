<?php

?>
<div class="row">
  <div class="col-12">
    <h1>ProductsPage</h1>
  </div>

  <form class="col-12" action="./ProductsController/addProduct" method="post">
  <input class="col-3" name="name" placeholder="Name" required>
  <input class="col-3" name="price" placeholder="Price" required>
  <input type="submit" value="Send!">
</form>

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
      <td class="col-2">Name</td>
      <td class="col-2">Price</td>

    </tr>

<?php

  foreach ($products as $row)
  {
    echo "<tr class='col-12'>";
    echo "<td class='col-2'>" . $row->productId . "</td>";
    echo "<td class='col-2'>" . $row->name  . "</td>";
    echo "<td class='col-2'>€ " . str_replace('.', ',', $row->price)  . "</td>";
    echo "<td class='col-2'><a href='./ProductsController/loadEditProduct/".$row->productId." '>Edit</a></td>";
    echo "<td class='col-2'><a href='./ProductsController/deleteProduct/".$row->productId."'>Delete</a></td>";
    echo "</tr>";
  }

?>
  </table>
</div>
