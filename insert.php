<?php
date_default_timezone_set("Europe/London");

if(isset($_POST['selection'])){
	$service = $_POST['selection'];
}
else {$service = NULL;}

if(isset($_POST['title'])){
	$title = $_POST['title'];
}
else {$title = NULL;}

if(isset($_POST['firstName'])){
	$firstName = $_POST['firstName'];
}
else {$firstName = NULL;}

if(isset($_POST['lastName'])){
	$lastName = $_POST['lastName'];
}
else {$lastName = NULL;}

if(isset($_POST['organisationName'])){
	$orgName = $_POST['organisationName'];
}
else {$orgName = NULL;}

if(isset($_POST['anonymous'])){
	$anon = $_POST['anonymous'];
}
else {$anon = NULL;}




$con = mysqli_connect("csmysql.cs.cf.ac.uk", "'group4.2015'", "A3bb6@4kmna", "group4_2015");
if (!$con){
	die("Failed to connect: " .mysqli_connect_error());
}

//Insert Citizen
if(!empty($_POST['title']) && !empty($_POST['firstName']) && !empty($_POST['lastName'])){
	$type = "Citizen";
	$name = $_POST['title'] . " " . $_POST['firstName'] . " " . $_POST['lastName'];
	$sql = "INSERT INTO Firmstep(Type, Name, Service, Queued) VALUES ('".$type."', '".$name."', '".$service."', (NOW()));";
	if($insert = mysqli_query($con, $sql)){
			header('Location: firmstep.php');}}
	

elseif(!empty($_POST['organisationName'])){
	$orgType = "Organisation";
	$sql = "INSERT INTO Firmstep(Type, Name, Service, Queued) VALUES ('".$orgType."', '".$_POST['organisationName']."', '".$service."',(NOW()));";
	if($insert = mysqli_query($con, $sql)){
			header('Location: firmstep.php');}}
	

else{
	$personType = "Anonymous";
	$diffName = "Anonymous";
	$sql = "INSERT INTO Firmstep(Type, Name, Service, Queued) VALUES ('".$personType."', '".$diffName."', '".$service."', (NOW()));";
	if($insert = mysqli_query($con, $sql)){
			header('Location: firmstep.php');}}

?>