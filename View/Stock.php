<div class="row">
  <div class="col-12">
    <h1>Products Stock Page</h1>
  </div>
  <form class="col-12" action="./StockController/addStock" method="post">
    <h2>Add stock</h2>
    <select name="product" class="col-2" required>
      <option value="" selected disabled hidden>Choose a product</option>
      <?php
      foreach ($products as $row)
      {
        echo "<option value='$row->productId'>$row->productName</option>";
      }
        ?>
    </select>
    <select name="location" class="col-2" required>
      <option value="" selected disabled hidden>Choose a location</option>
      <?php
      foreach ($locations as $row)
      {
        echo "<option value='$row->locationId'>$row->locationName</option>";
      }
       ?>
    </select>
    <input class="col-2" name="amountInStock" placeholder="Enter Stock" required>
    <input class="col-2 addSubmit" type="submit" value="Add stock">
  </form>

	<h2>Search stock</h2>
  <form class="col-12" action="./StockController/searchStockProduct" method="post">
	   <input class="col-6" name="product" type="text" placeholder="Enter Product Name" required>
		 <input class="col-2" type="submit" value="Search Product">
		 <div class="col-4"></div>
  </form>

  <form class="col-12" action="./StockController/searchStockLocation" method="post">
	   <input class="col-6" name="location" type="text" placeholder="Enter Location Name" required>
		 <input class="col-2" type="submit" value="Search Location">
		 <div class="col-4"></div>
  </form>


  <table class="col-12" id="tableHeader">
    <tr class="col-12">
      <td class="col-2"><a href="./StockController/sortStock/productName">Sort By Product</a></td>
      <td class="col-2"><a href="./StockController/sortStock/location">Sort By Location</a></td>
      <td class="col-2"><a href="./StockController/sortStock/stock">Sort By Stock</a></td>
    </tr>
    <tr class="productsTableHeader col-12">
      <td class="col-2">Product Name</td>
      <td class="col-2">Stock Location</td>
      <td class="col-2">Stock</td>
    </tr>

<?php
  foreach ($stock as $row)
  {
    echo "<tr class='col-12'>";
    echo "<td class='col-2'>" . $row->productName  . "</td>";
    echo "<td class='col-2'>" . $row->locationName  . "</td>";
    echo "<td class='col-2'>" . $row->amountInStock  . "</td>";
    echo "<td class='col-2'><a href='./StockController/loadEditStock/".$row->productId.'/'.$row->locationId.'/'.$row->amountInStock.'/'.$row->productName.'/'.$row->locationName." '>Edit</a></td>";
    echo "<td class='col-2'><a href='./StockController/deleteStock/".$row->productId.'/'.$row->locationId.'/'.$row->productName."'>Delete</a></td>";
    echo "</tr>";
  }

?>
  </table>
</div>
