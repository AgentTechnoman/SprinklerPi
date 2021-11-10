<html>
<head>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tablesorter.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sprinklertable.css">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/normalize1.css">
	<link rel="stylesheet" href="css/skeleton1.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sprinkler History</title>
</head>
<body>
<div style="padding:15px;">
<m style='font-size:25px;'>SprinklerPi History<img style='margin: 0px 0px 0px 0px;' src=./images/grass.png height=27px></m>

<script>
$(document).ready(function()
    {
        $("#myTable").tablesorter( {sortList: [[0,1]]} );
    }
);
</script>

<div class=datagrid>
<table id="myTable" class="tablesorter">
<thead><tr><th width="110">Date</th><th>Zone</th><th width="45">Timer</th></tr></thead>
<tbody>
<tr id="sched"><td>3/16/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>3/16/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>3/18/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>3/18/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>3/19/18 - 6:13 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>3/19/18 - 6:13 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>3/19/18 - 6:13 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr><td>3/19/18 - 6:14 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>3/19/18 - 6:14 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr id="sched"><td>3/20/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>3/20/18 - 1:00 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>3/20/18 - 1:00 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr id="sched"><td>3/20/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>4/18/18 - 6:38 pm</td><td>RV Parking - ALL</td><td>1</tr>
<tr><td>4/18/18 - 6:39 pm</td><td>Driveway - ALL</td><td>1</tr>
<tr><td>4/18/18 - 7:11 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr><td>4/18/18 - 7:13 pm</td><td>RV Parking (Station 1)</td><td>2</tr>
<tr id="sched"><td>4/19/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/19/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/20/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/20/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/21/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/21/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/22/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/22/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/23/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/23/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/25/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/25/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/27/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/27/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/29/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>4/29/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/1/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/1/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>5/11/18 - 11:35 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/11/18 - 11:35 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/11/18 - 11:35 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/11/18 - 11:36 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/11/18 - 11:36 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/11/18 - 11:36 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr id="sched"><td>5/12/18 - 6:42 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>5/12/18 - 10:31 am</td><td>RV Parking - ALL</td><td>1</tr>
<tr><td>5/12/18 - 10:31 am</td><td>RV Parking - ALL</td><td>1</tr>
<tr><td>5/12/18 - 10:32 am</td><td>Driveway - ALL</td><td>1</tr>
<tr><td>5/12/18 - 10:36 am</td><td>RV Parking - ALL</td><td>15</tr>
<tr><td>5/12/18 - 10:51 am</td><td>Driveway - ALL</td><td>15</tr>
<tr id="sched"><td>5/13/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/13/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/15/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/15/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/17/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/17/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/19/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/19/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/21/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/21/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>5/21/18 - 7:08 am</td><td>RV Parking - ALL</td><td>15</tr>
<tr><td>5/21/18 - 7:08 am</td><td>Driveway (Station 2)</td><td>1</tr>
<tr><td>5/21/18 - 7:23 am</td><td>Driveway - ALL</td><td>15</tr>
<tr id="sched"><td>5/23/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/23/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:14 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/24/18 - 4:14 am</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:14 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/24/18 - 4:14 am</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:14 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/24/18 - 4:14 am</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:14 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/24/18 - 4:14 am</td><td>RV Parking - ALL</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:14 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:14 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/24/18 - 4:14 am</td><td>RV Parking - ALL</td><td>15</tr>
<tr><td>5/24/18 - 4:15 am</td><td>RV Parking - ALL</td><td>15</tr>
<tr><td>5/24/18 - 4:15 am</td><td>Driveway - ALL</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:16 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/24/18 - 4:16 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/24/18 - 4:16 am</td><td>RV Parking - ALL</td><td>15</tr>
<tr><td>5/24/18 - 4:29 am</td><td>Driveway - ALL</td><td>15</tr>
<tr><td>5/24/18 - 4:30 am</td><td>Driveway - ALL</td><td>15</tr>
<tr><td>5/24/18 - 4:31 am</td><td>Driveway - ALL</td><td>15</tr>
<tr id="sched"><td>5/25/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/25/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/27/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/27/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>5/28/18 - 7:44 pm</td><td>RV Parking (Station 1)</td><td>5</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/28/18 - 7:48 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>5/28/18 - 7:48 pm</td><td>Driveway (Station 2)</td><td>5</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>5/28/18 - 7:49 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr id="sched"><td>5/29/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/29/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/31/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>5/31/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>6/1/18 - 7:43 pm</td><td>RV Parking - ALL</td><td>30</tr>
<tr><td>6/1/18 - 7:43 pm</td><td>Driveway - ALL</td><td>30</tr>
<tr><td>Error</td><td>Error</td><td>Error</tr>
<tr><td>6/1/18 - 7:44 pm</td><td>RV Parking (Station 1)</td><td>30</tr>
<tr><td>6/1/18 - 7:44 pm</td><td>RV Parking (Station 1)</td><td>20</tr>
<tr><td>6/1/18 - 7:45 pm</td><td>RV Parking (Station 1)</td><td>20</tr>
<tr id="sched"><td>6/2/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/2/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/4/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/4/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/6/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/6/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/8/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/8/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/10/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/10/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/12/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/12/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/14/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/14/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/16/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/16/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/18/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/18/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/20/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/20/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/22/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/22/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>6/22/18 - 7:00 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr id="sched"><td>6/24/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/24/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/26/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/26/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/28/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/28/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/30/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>6/30/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/2/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/2/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/4/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/4/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/6/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/6/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/8/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/8/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>7/9/18 - 6:43 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>7/9/18 - 6:44 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>7/9/18 - 7:07 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>7/9/18 - 7:07 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>7/9/18 - 7:10 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>7/9/18 - 7:11 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>7/9/18 - 7:12 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>7/9/18 - 7:12 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>7/9/18 - 7:17 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>7/9/18 - 7:19 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>7/9/18 - 7:19 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr><td>7/9/18 - 7:20 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr><td>7/9/18 - 7:21 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr><td>7/9/18 - 7:21 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr><td>7/9/18 - 7:23 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr id="sched"><td>7/11/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/11/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/12/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/12/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/13/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/13/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/14/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/14/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/15/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/15/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/16/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/16/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/17/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/17/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/18/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/18/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/19/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/19/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/20/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/20/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/21/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/21/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/22/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/22/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/23/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/23/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/24/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/24/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/25/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/25/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/26/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/26/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/27/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/27/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/28/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/28/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/29/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/29/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/30/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/30/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/31/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>7/31/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/1/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/1/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/2/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/2/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/3/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/3/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/4/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/4/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/5/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/5/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/6/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/6/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/7/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/7/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/8/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/8/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/9/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/9/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/10/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/10/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/11/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/11/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/13/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/13/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/15/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/15/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/17/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/17/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/19/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/19/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/21/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/21/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/23/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/23/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/25/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/25/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/27/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/27/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>8/27/18 - 8:40 pm</td><td>RV Parking - ALL</td><td>15</tr>
<tr><td>8/27/18 - 8:55 pm</td><td>Driveway - ALL</td><td>15</tr>
<tr id="sched"><td>8/29/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/29/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>8/30/18 - 7:50 pm</td><td>RV Parking (Station 1)</td><td>2</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>8/30/18 - 7:51 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>8/30/18 - 7:51 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>8/30/18 - 7:58 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr><td>8/30/18 - 8:12 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr><td>8/30/18 - 8:18 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>8/30/18 - 8:19 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>8/30/18 - 8:19 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>8/30/18 - 8:20 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>8/30/18 - 8:20 pm</td><td>RV Parking (Station 1)</td><td>5</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>8/30/18 - 8:20 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>8/30/18 - 8:20 pm</td><td>RV Parking (Station 1)</td><td>5</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>8/30/18 - 8:21 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>8/30/18 - 8:28 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr id="sched"><td>8/31/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>8/31/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr><td>8/31/18 - 5:13 pm</td><td>RV Parking (Station 1)</td><td>10</tr>
<tr><td>8/31/18 - 5:29 pm</td><td>RV Parking (Station 1)</td><td>3</tr>
<tr id="sched"><td>9/3/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/4/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/7/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/7/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/10/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/11/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/14/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/14/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/17/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/18/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/21/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/21/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/24/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/25/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/28/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>9/28/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/1/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/2/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/5/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/5/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/8/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/9/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/12/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/12/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/15/18 - 5:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr id="sched"><td>10/16/18 - 1:00 am</td><td>All Stations (Scheduled)</td><td>15</sched></tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>10/16/18 - 1:00 AM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:01 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:01 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:02 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:02 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:02 pm</td><td>RV Parking - ALL</td><td>1</tr>
<tr><td>4/7/19 - 8:02 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:02 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:02 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:02 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:02 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:02 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:03 pm</td><td>Front Planters (Station 3)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:03 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:03 pm</td><td>Driveway - ALL</td><td>1</tr>
<tr><td>4/7/19 - 8:03 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:03 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:03 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:04 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:04 pm</td><td>Front Planters (Station 3)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:04 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:05 pm</td><td>Driveway (Station 2)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:05 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
<tr><td>4/7/19 - 8:05 pm</td><td>RV Parking (Station 1)</td><td>1</tr>
<tr style='background-color:rgba(255,128,128,0.6)'><td>4/7/19 - 8:05 PM</td><td>Manually Stopped</td><td>&nbsp;</tr>
