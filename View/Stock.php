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
      <td class="col-2">ID</td>
      <td class="col-2">Name</td>
      <td class="col-2">Price</td>
      <td class="col-2">Stock Location</td>
      <td class="col-2">Stock</td>


    </tr>

<?php
  var_dump($stock);
  // foreach ($stock as $row)
  // {
  //   echo "<tr class='col-12'>";
  //   echo "<td class='col-2'>" . $row->id . "</td>";
  //   echo "<td class='col-2'>" . $row->name  . "</td>";
  //   echo "<td class='col-2'>€ " . str_replace('.', ',', $row->price)  . "</td>";
  //   echo "<td class='col-2'><a href='./ProductsController/loadEditProduct/".$row->id." '>Edit</a></td>";
  //   echo "<td class='col-2'><a href='./ProductsController/deleteProduct/".$row->id."'>Delete</a></td>";
  //   echo "</tr>";
  // }

?>
  </table>
</div>
