<div class="row">
  <div class="col-12">
    <h1>Products Stock Page</h1>
  </div>
  <form class="col-12" action="./StockController/addStock" method="post">
    <h2>Add stock</h2>
    <select name="product" class="col-2">
      <option value="" selected disabled hidden>Choose a product</option>
      <?php
      foreach ($products as $row)
      {
        echo "<option value='$row->productId'>$row->productName</option>";

      }
        ?>
    </select>
    <select name="location" class="col-2">
      <option value="" selected disabled hidden>Choose a location</option>
      <?php
      foreach ($locations as $row)
      {
        echo "<option value='$row->locationId'>$row->locationName</option>";
      }
       ?>
    </select>
    <input class="col-2" name="amountInStock" placeholder="Enter Stock" required>
    <input class="col-2 addSubmit" type="submit" value="Add stock!">
  </form>

	<h2>Search stock</h2>
	<div class="col-12">
	  <div id="dropdownSearchProduct" class="dropdown-content">
	    <input class="col-6" type="text" id="searchInputProduct" onkeyup="filterFunction()" placeholder="Enter Product Name">
			<?php
			// foreach
			?>

	    <!-- <a href="#about">About</a>
	    <a href="#base">Base</a>
	    <a href="#blog">Blog</a>
	    <a href="#contact">Contact</a>
	    <a href="#custom">Custom</a>
	    <a href="#support">Support</a>
	    <a href="#tools">Tools</a>
	    <a href="#about">About</a>
	    <a href="#base">Base</a>
	    <a href="#blog">Blog</a>
	    <a href="#contact">Contact</a>
	    <a href="#custom">Custom</a>
	    <a href="#support">Support</a>
	    <a href="#tools">Tools</a> -->
	  </div>
		<button onclick="search()" class="col-2 dropbtn">Search Product</button>
		<div class="col-3">
		</div>
	</div>

  <table class="col-12">
    <tr class="productsTableHeader col-12">
      <td class="col-2">Product Name</td>
      <td class="col-2">Stock Location</td>
      <td class="col-2">Stock</td>

    </tr>

<?php
  // var_dump($stock);
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
