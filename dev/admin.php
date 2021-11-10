<?php
// Define starting Vars and Cmds
$stat = shell_exec("cat ./active");
$check = shell_exec("cat ./check");

if ($_POST['activate']||$_GET['activate'] == 1) {
	file_put_contents('active','1');
	header("Refresh:0");
}

if ($_POST['deactivate']||$_GET['deactivate'] == 1) {
	file_put_contents('active','0');
	header("Refresh:0");
}

if ($_POST['enable']||$_GET['enable'] == 1) {
	file_put_contents('check','0');
	header("Refresh:0");
}

if ($_POST['disable']||$_GET['disable'] == 1) {
	file_put_contents('check','1');
	header("Refresh:0");
}

if ($_POST['reset']||$_GET['reset'] == 1) {
	file_put_contents('check','0');
	header("Refresh:0");
}

if ($_POST['maintenance']||$_GET['maintenance'] == 1) {
	file_put_contents('check','8');
	header("Refresh:0");
}

if ($stat == 1) {
	if ($check == 0) {
		$status = "Active";
		$code = "Next Cycle Ready";
	}
	elseif ($check >= 1 && $check <= 7) {
		$status = "Active";
		$code = "Mid-Cycle";
	}
	elseif ($check == 8) {
		$status = "Active";
		$code = "Maintenance Mode";
	}
	else { 
		$status = "Active";
		$code = "Invalid/Check Code $check";
	}
}

if ($stat == 0) {
	if ($check == 0) { // NOT forcibly disabled
		$status = "Inactive";
		$code = "Seasonal Deactivation";
	}
	elseif ($check == 1) { // forcibly disabled
		$status = "Disabled";
		$code = "Repairs Pending";
	}
	elseif ($check >= 2 && $check <= 8) { // deactivated mid-cycle
		$status = "Disabled";
		$code = "Deactivated Mid-Cycle";
	}
	else { 
		$status = "Inactive";
		$code = "Invalid/Check Code $check";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sprinkler Schedule Admin</title>
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400,300,600">
		<link rel="stylesheet" type="text/css" href="admin/skeleton1.css">
		<link rel="icon" type="image/png" href="images/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">			
			<center>
				<span style="font-size:2.5em;font-weight:300;">
					SprinklerPi
				</span>
				<img src=./images/grass.png height=40px><br>	
				System status is<br>
				<span style="font-size:2.5em;font-weight:300;">
					<?php echo "$status"?>
					
				</span><br>
				with status code<br>
				<span style="font-size:2.5em;font-weight:300;">
					<?php echo "$code"?>
					
				</span><br>
				<?php
					if ($status == "Active") {
						echo "<form method='post' action='admin.php'>
					<input type='submit' value='Deactivate?' name='deactivate' class='button button-primary'></input>";
					if ($check != 0) {
							echo "<br><input type='submit' value='Reset Cycle?' name='reset' class='button button-primary'></input>";
						}
						if ($check != 8) {
							echo "<br>
					<input type='submit' value='Maintenance Mode?' name='maintenance' class='button button-primary'></input>";
						}
					}
					
					if ($status == "Inactive") {
						echo "<form method='post' action='admin.php'>
					<input type='submit' value='Activate?' name='activate' class='button button-primary'></input>";
						if ($check == 0) {
							echo "<br>
					<input type='submit' value='Disable?' name='disable' class='button button-primary'></input>";
						}
					}
					if ($status == "Disabled") {
						echo "<form method='post' action='admin.php'>
					<input type='submit' value='Enable?' name='enable' class='button button-primary'></input>";
					}
				?>

				</form>
			</center>
		</div>
	</body>
</html>