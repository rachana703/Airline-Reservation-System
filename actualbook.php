


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
    height: 420px;
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
<body>
<center>
<h1> Book Flight </h1>
<form action="receipt.php">
Number of Passengers: <input type="text" name="no"><br><br>

Class of travel:
<select name="class">
<option value="Economy">ECONOMY</option>
<option value="Business">BUSINESS</option>
<option value="First">FIRST</option>
</select>

<br><br>
Type of journey:
<input type="radio" name="journey" value="Single">SINGLE &nbsp&nbsp&nbsp
<input type="radio" name="journey" value="Return">RETURN<br>
<br>
<input type="submit" value="Book">
</form>
</center>




<?php
$journeytime=$_GET["radiosel"];
$p=0;
session_start();
$_SESSION['myjourneytime']=$journeytime;

$db = mysqli_connect('localhost','root','','endeavour')
 or die('Error connecting to MySQL server.');

$sql = "select * from  flights";
$result = mysqli_query($db,$sql);

echo "<center><br><br><table border=1><caption>Just Confirming the details!</caption>";
echo "<tr><th>FlightName</th><th>From</th><th>To</th><th>Departure Time</th><th>Travel Date</th><th>Fare</th></tr>";

while ($row = mysqli_fetch_array($result)) {
 if($journeytime==$row['time'])
   {
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
   echo "</td></tr>";
  
   }
  // else
   //{
  // $p=1;
  //}

}


//if($p==1)
	//echo "<b>No flights available</b><hr><br><br>";
echo "</table>";

echo "</center>";

?>




</div>
</body>
</html>

