<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color:   black; 
    border: none;
    color: white;
    padding: 10px 28px;
    text-align: center;
    
    font-size: 13px;
    margin: 2px 1px;
    cursor: pointer;
    
}
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
div {
    width: 100px;
    height: 520px;
    background-color: white;/*#e5bf9a*/
    box-shadow: 10px 10px 5px #888888;
    align: center;
    opacity: 0.7;
}
.center {
    margin: auto;
    width: 60%;
    border: none;
    padding: 10px;
}
body{
/* background-color: #87CEFA; */
 background: url(air8.jpg) no-repeat fixed;
 background-size: cover;
}

</style>
</head>
<body>
 
<div class="center">
<center>
<h1> Search Flight </h1>
<form action="book.php">
Name: <input type="text" name="name"><br><br>

From:
<select name="departure">
<option value="BOM">MUMBAI(BOM)</option>
<option value="DEL">DELHI(DEL)</option>
</select>

To:
<select name="destination">
<option value="DEL">DELHI(DEL)</option>
<option value="BOM">MUMBAI(BOM)</option>
</select>

<br><br>
Travel Date:
<input type="date" name="traveldate"><br><br>

<input type="submit" value="Search">
</form>
</center>

<?php
$name=$_GET["name"];
$departure=$_GET["departure"];
$destination=$_GET["destination"];
$traveldate=$_GET["traveldate"];
$p=0;
$i=0;

$db = mysqli_connect('localhost','root','','endeavour')
 or die('Error connecting to MySQL server.');


$sql = "select * from  flights";
$result = mysqli_query($db,$sql);


echo "<center><br><br><table border=1><caption>Available flights</caption>";
echo "<tr><th>FlightName</th><th>From</th><th>To</th><th>Departure Time</th><th>Travel Date</th><th>Fare</th><th>Select</th></tr>";
echo "<form action='actualbook.php' method='get'>";
while ($row = mysqli_fetch_array($result)) {
 if($departure==$row['departure'] && $destination==$row['destination'])
   {
	$time=$row['time'];
   	echo "<tr><td>";
   	echo $row['name'];
   echo "</td><td>";
   	echo $row['departure'];
   	echo "</td><td>";
   	echo $row['destination'];
   	echo "</td><td>";
	 echo $row['time'];
   
      echo "</td><td>";
     	echo $row['traveldate'];
   	echo "</td><td>";
   	echo $row['PRICE'];
   echo "</td>";
   echo "<td><input type='radio' name='radiosel' value='$time' checked></td><tr>";
	
   }
   else
   {
		$p=1;
}

}


if($p==1)
	echo "<b>No flights available</b><hr><br><br>";
echo "</table>";

echo "<br><br><input type='submit' value='Book now'>";
echo "</form></center>";

?>


</div>
</body>
</html>
