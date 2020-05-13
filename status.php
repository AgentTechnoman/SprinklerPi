<?php
include "sprinklercurrent.php"; $now = (date("H:i:s",time()));
	   if ($now < $end_time){echo "<h4>$zonesetto <br>Currently Watering</h4>  Time Remaining: "; echo gmdate("i:s", ((strtotime($end_time))-(strtotime($now)))); echo "<br><br>";}
	   else { echo '<h4>No Sprinklers are Activated</h4>'; }
	   ?>