<?php


?>
<div class="row">
  <div class="col-12">
    <h1>ProductsPage</h1>
  </div>

  <table>
    <tr class="productsTableHeader">
      <td>ID</td>
      <td>Name</td>
      <td>Price</td>

    </tr>

  <?php

  foreach ($products as $row) {
    echo "<tr>";
    echo "<td>" . $row->id . "</td>";
    echo "<td>" . $row->name  . "</td>";
    echo "<td>€ " . str_replace('.', ',', $row->price)  . "</td>";
    echo "<td><a href='../ProductsController/editProduct/".$row->id." '>Edit</a></td>";
    echo "<td><a href='../ProductsController/deleteProduct'>Delete</a></td>";
    echo "</tr>";
  }

  ?>
  </table>
</div>
