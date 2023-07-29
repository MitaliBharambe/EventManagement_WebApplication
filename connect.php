<?php
 $con = mysqli_connect('localhost', 'root', '','starlightevents');
$username = $_POST['username'];
$contact = $_POST['contact'];
$eventdate = $_POST['eventdate'];
$eventtime = $_POST['eventtime'];
$eventtype = $_POST['eventtype'];
$location = $_POST['location'];
$budget = $_POST['budget'];
$usertheme = $_POST['usertheme'];
$description = $_POST['description'];
$sql = "INSERT INTO bookorder(id,username,contact,eventdate,eventtime,eventtype,location,budget,usertheme,description) VALUES ('0', '$username', '$contact', '$eventdate','$eventtime','$eventtype','$location','$budget','$usertheme','$description')";
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Records Inserted";
}
 ?>