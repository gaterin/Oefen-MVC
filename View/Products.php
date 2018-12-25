<?php



?>
<div class="row">
  <div class="col-12">
    <h1>ProductsPage</h1>
  </div>


  <form class="col-12" action="../ProductsController/addProduct" method="post">
  <input class="col-3" name="name" placeholder="Name" required>
  <input class="col-3" name="price" placeholder="Price" required>
  <input type="submit" value="Send!">
</form>

  <div class="col-3">
<!-- <h3><a href="../ProductsController/addProduct">Add Product</a></h3> -->
</div>
<div class="col-3">

</div>
<div class="col-3">

</div>
<div class="col-3">

</div>
  <table class="col-12">
    <tr class="productsTableHeader col-12">
      <td class="col-2">ID</td>
      <td class="col-2">Name</td>
      <td class="col-2">Price</td>

    </tr>

  <?php

  foreach ($products as $row) 
  {
    echo "<tr class='col-12'>";
    echo "<td class='col-2'>" . $row->id . "</td>";
    echo "<td class='col-2'>" . $row->name  . "</td>";
    echo "<td class='col-2'>€ " . str_replace('.', ',', $row->price)  . "</td>";
    echo "<td class='col-2'><a href='../ProductsController/editProduct/".$row->id." '>Edit</a></td>";
    echo "<td class='col-2'><a href='../ProductsController/deleteProduct/".$row->id."'>Delete</a></td>";
    echo "</tr>";
  }

  ?>
  </table>
</div>
