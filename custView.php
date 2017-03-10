<html>
<title>Firmstep software test</title>
<meta charset = "utf-8" /><!--sets the character encoding for unicode-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
<table class="table-bordered table-hover" border ="1" style = "double" width = "60%">

<?php
$con = mysqli_connect("csmysql.cs.cf.ac.uk", "'group4.2015'", "A3bb6@4kmna", "group4_2015");
if (!$con){
	die("Failed to connect: " .mysqli_connect_error());
}

$query = "SELECT * FROM Firmstep";

$r = mysqli_query($con, $query, MYSQLI_STORE_RESULT)
    or die("Failed to connect: " . mysqli_error($con));
    echo "<tr>";
    echo "<th id='tableHeading'>#</th>";
    echo "<th id='tableHeading'>Type</th>";
    echo "<th id='tableHeading'>Name</th>";
    echo "<th id='tableHeading'>Service</th>";
    echo "<th id='tableHeading'>Queued</th>";
    echo "</tr>";
while($row = mysqli_fetch_array($r)){
    echo"<tr>";
    echo "<td>".$row['Order']."</td>";
    echo "<td>".$row['Type']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Service']."</td>";
    echo "<td>".$row['Queued']."</td>";
    echo"</tr>";}

?>