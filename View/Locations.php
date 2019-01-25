<?php

?>
<div class="row">
  <div class="col-12">
    <h1>Locations Page</h1>
  </div>
  <form class="col-12" action="./LocationsController/addLocation" method="post">
  <h2>Add a location</h2>
  <input class="col-6" name="locationName" placeholder="Enter Location Name" required>
  <input class="col-2 addSubmit" type="submit" value="Add location!">
</form>

  <div class="col-3">
</div>
<div class="col-3">
</div>
<div class="col-3">
</div>
<div class="col-3">
</div>
<form class="col-12" action="./LocationsController/searchLocation" method="post">
<h2>Search a location</h2>
<input class="col-6" name="locationName" placeholder="Enter Location Name" required>
<input class="col-2 addSubmit" type="submit" value="Search location!">
</form>
  <table class="col-12" id="tableHeader">
    <tr class="col-12">
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
    echo "<td class='col-2'><a href='./LocationsController/loadEditLocation/".$row->locationId." '>Edit</a></td>";
    echo "<td class='col-2'><a href='./LocationsController/deleteLocation/".$row->locationId."'>Delete</a></td>";
    echo "</tr>";
  }

?>
  </table>
</div>
