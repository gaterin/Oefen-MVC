<?php

?>
<div class="row">
  <div class="col-12">
    <h1>Locations Page</h1>
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
      <td class="col-2">Location ID</td>
      <td class="col-2">Location Name</td>
    </tr>

<?php
  // var_dump($locations);
  foreach ($locations as $row)
  {
    echo "<tr class='col-12'>";
    echo "<td class='col-2'>" . $row->locationId . "</td>";
    echo "<td class='col-2'>" . $row->locationName  . "</td>";
    // echo "<td class='col-2'><a href='./StockController/loadEditProduct/".$row->productId." '>Edit</a></td>";
    // echo "<td class='col-2'><a href='./ProductsController/deleteProduct/".$row->productId."'>Delete</a></td>";
    echo "</tr>";
  }

?>
  </table>
</div>
