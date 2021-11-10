<?php
#9 = Front Yard Sprinkler
#22 = Sprinklers by SwingSet
#10 = Sprinklers in front of Patio
#27 = Grapes Sprinkler

#include "currentsprinklerstatus.php";
$TIMER = $_POST["timer"];
#WRITE ACCESS TO TABLE
function writetime($zonewrite,$TIMER){

 $now = (date("H:i:s",time())); #echo "$rightnow<br>";
 $rightnow = strtotime($now);
 $end_time = $rightnow+(60*$TIMER); #echo "$end_time <br>";
 $end_time = date("H:i:s",$end_time); #echo "$end_time <br>";
 $file_data = "<?php  \$start_time = '$now';\n
  \$end_time = '$end_time'; \n
  \$timersetto = '$TIMER'; \n
  \$zonesetto = '$zonewrite'; ?> ";
 file_put_contents('sprinklercurrent.php', $file_data);
 #echo $zonewrite;
}


if ($_POST["Stop"] == 1) {  $command = escapeshellcmd("sudo python stopsprinkler.py"); $output = shell_exec($command);
 $file_data = "<?php  \$start_time = '$now';\n
  \$end_time = '00:00:00'; \n
  \$timersetto = '$TIMER'; \n
  \$zonesetto = '$zonewrite'; ?> ";
 file_put_contents('sprinklercurrent.php', $file_data);
}

if ($_POST["RVParking"] == 1) {   $TIMER= $_POST["RVParkingTime"]; $action = "RV Parking (Station 1) active for $TIMER minute(s)";
 $command = exec("sudo python dosprinkler.py 25 $TIMER > /dev/null 2>&1 &"); $output = shell_exec($command);
 writetime('RVParking',$TIMER);}


if ($_POST["Driveway"] == 1) {   $TIMER= $_POST["DrivewayTime"]; $action = "Driveway (Station 2) active for $TIMER minute(s)";
 $command = exec("sudo python dosprinkler.py 24 $TIMER > /dev/null 2>&1 &"); $output = shell_exec($command);
 writetime('Driveway',$TIMER);}

if ($_POST["FrontPlanters"] == 1) {  $TIMER= $_POST["FrontPlantersTime"]; $action = "Front Planters (Station 3) active for $TIMER minute(s)";
 $command = exec("sudo python dosprinkler.py 23 $TIMER > /dev/null 2>&1 &"); $output = shell_exec($command);
 writetime('FrontPlanters',$TIMER);}

#if ($_POST["GrapeGarden"] == 1) {   $TIMER= $_POST["GrapeGardenTime"]; $action = "Grape Garden Activated for $TIMER Minute";
#         $command = exec("sudo python dosprinkler.py 27 $TIMER > /dev/null 2>&1 &"); $output = shell_exec($command);
#         writetime('Grape Garden',$TIMER);}

if ($_POST["AllZones"] == 1) {
 $TIMER= $_POST["AllZonesTime"]; $action = "All stations active for $TIMER minutes(s) each";
 $command = exec("sudo python stopsprinkler.py > /dev/null 2>&1 &"); $output = shell_exec($command);
 $command = exec("sudo python dosprinklerall.py $TIMER > /dev/null 2>&1 &"); $output = shell_exec($command);
 writetime('All Stations',($TIMER*4)+0.070);
}

#$command = escapeshellcmd("sudo python dosprinkler.py 10 $TIMER"); $output = shell_exec($command);  ?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <script src="scripts/jquery.min.js"></script>
  <title>Sprinkler Controller</title>
  <link rel="stylesheet" type="text/css" href="css/sprinklertable.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400,300,600">
  <link rel="stylesheet" type="text/css" href="css/normalize1.css">
  <link rel="stylesheet" type="text/css" href="css/skeleton1.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- USED FOR FADING OUT NEW SUBMISSIONS USING JQUERY -->
  <script src="scripts/jquery.min.js"></script>
 </head>

 <body>
 <!-- USED FOR UPDATING STATUS USING JQUERY -->
  <script src="scripts/jquery.min.js"></script>
  <script>
   setInterval(
    function() {$('#status').fadeOut(0).load('status.php').fadeIn(0);}, 1000);
  </script>
  <script>
   $(document).ready(function() {
    $("testing").fadeOut()
   });
  </script>
 
  <div class="container">
   <div class="row">
    <div class="two column" style="margin-top: 5%;">
     <center>
      <span style="font-size:2.5em;font-weight:300;">
		SprinklerPi
	  </span>
	  <a href="admin.php"><img src=./images/grass.png height=40px></a><br>
	  <div id="status"><?php include "status.php";?></div>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type=submit value="RV Parking" class="button button-primary"></input>
        <select name=RVParkingTime><?php for($x=1; $x<=20; $x++){echo "<option name='timer'value='$x'>$x</option>";}?></select>
        <input type=hidden name=RVParking value='1'/>
       </form>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type=submit value="Driveway" class="button button-primary"></input>
        <select name=DrivewayTime><?php for($x=1; $x<=20; $x++){echo "<option name='timer'value='$x'>$x</option>";}?></select>
        <input type=hidden name=Driveway value='1'/>
       </form>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type=submit value="Front Planters" class="button button-primary"></input>
        <select name=FrontPlantersTime><?php for($x=1; $x<=20; $x++){echo "<option name='timer'value='$x'>$x</option>";}?></select>
        <input type=hidden name=FrontPlanters value='1'/>
       </form>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type=submit value="Water All Zones" class="button button-primary1" style='background-color: #33C3F0;color:white;'></input>
        <select name=AllZonesTime><?php for($x=1; $x<=20; $x++){echo "<option name='timer'value='$x'>$x</option>";}?></select>
        <input type=hidden name=AllZones value='1'/>
       </form>
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type=submit value="OFF" class="button button-primary1" style='background-color: #ee2222;color:white;width:326px;'></input>
        <input type=hidden name=Stop value='1'/>
       </form>
       <br>
       <br>
       <a href="history.php">Recent History</a>
      </div>
     </center>
    </div>
   </div>
  </div>
  <script>
   function showDivs(start)
   {
    var div;
    while((div = document.getElementById("div" + start)) !== false)
    {
     div.style.display = (div.style.display == "none") ? "" : "none";
     start ++;
    }
   }
  </script>
 </body>
</html>
