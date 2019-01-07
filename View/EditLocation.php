
<form class="col-12" action="./LocationsController/editLocation" method="post">
<input class="col-3" name="locationtId" value="<?php echo $locationId; ?>" placeholder="<?php echo $locationId; ?>" readonly>
<input class="col-3" name="locationName" placeholder="name">
<input type="submit" value="Send!">
</form>
