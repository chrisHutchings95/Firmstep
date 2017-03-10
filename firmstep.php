<?php
date_default_timezone_set("Europe/London");
$time = date("H:i");
?>

<html>
<title>Firmstep software test</title>
<meta charset = "utf-8" /><!--sets the character encoding for unicode-->
<script type="text/javascript" src="firmStep.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
.fieldset-auto-width {
         display: inline-block;
         left:1%;
         width:45%;

    }

.mainBody{
	padding-left:1%;
}
</style>
<body onload="hideInitial()">
	<div class="mainBody">
	<fieldset class="fieldset-auto-width">
		<h2>New Customer</h2>
		<form method ="post" name ="citizenPost"  action ="insert.php" id="citizenPost">
		<legend required>Services</legend>
		<input type="radio" name="selection" value="Housing" selected>Housing
		<br>
		<input type="radio" name="selection" value="Benefits">Benefits
		<br>
		<input type="radio" name="selection" value="Council Tax">Council Tax
		<br>
		<input type="radio" name="selection" value="Fly-Tipping">Fly-Tipping
		<br>
		<input type="radio" name="selection" value="Missed Bin">Misssed Bin
		<br><br>

		<input type="button" class="btn btn-primary btn-group" name="Citizen" value="Citizen" onclick="showCitizen()">
		<br>
		<input type="button"  class="btn btn-primary btn-group" name="Organisation" value="Organisation" onclick="showOrganisation()">
		<br>
		<input type="button" class="btn btn-primary btn-group"name="Anonymous" value="Anonymous" onclick="showAnonymous()">
	
		<br><br>
	<fieldset>
		<label id="title">Title</label><br>
		<select id= "selectTitle"  name="title" form="citizenPost">
                    <option value="Mr" name="Mr">Mr.</option>
                    <option value="Mrs" name="Mrs">Mrs.</option>
                    <option value="Miss" name="Miss">Miss.</option>
                    <option value="Dr" name="Dr">Dr.</option>
                </select>
                <br><br>
        <!-- <input type="textbox" name="anonymous" id="anonymous" value="Anonymous" style="hidden"> -->
        <label id="orgName">Organisation Name</label>
    	<input type="textbox" name="organisationName" id="organisationName" placeholder="Name of Organisation" style="hidden">
		<label id="firstNameLab">First name</label><br>
		<input type="textbox" name="firstName" id="firstName" placeholder="First Name">
		<br><br>
		<label id="lastNameLab">Last Name</label><br>
		<input type="textbox" name="lastName" id="lastName" placeholder="Last Name">
		<br><br>
		<input type="submit" class="btn-primary btn" name="submitForm" value="Submit" id="citizenSub">


</form>
	</fieldset>
	</fieldset>
</div>

	<table class = "mainTable table-bordered table-hover" border ="1" style = "double" width = "45%">
		<style type="text/css">
		.mainTable {position:absolute;right:6%;top:1%;
    }
</style>


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




