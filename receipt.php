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
    height: 320px;
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
 background: url(air5.jpg) no-repeat fixed;
 background-size: cover;
}

</style>
</head>
<body>
 
<div class="center">
<?php
$noofpassenger=$_GET["no"];
$class=$_GET["class"];
$typejourney=$_GET["journey"];
$int=(int)$noofpassenger;
$p=0;



$db = mysqli_connect('localhost','root','','endeavour')
 or die('Error connecting to MySQL server.');

$sql = "select * from  flights";
$result = mysqli_query($db,$sql);

echo "<center><br><br><br><br><br><br><table border=1><caption><b>Receipt for booking</b></caption>";
echo "<tr><th>FlightName</th><th>From</th><th>To</th><th>Departure Time</th><th>Travel Date</th><th>Total Price</th><th>Number of Passengers</th><th>Class</th><th>Journey type</th></tr>";
session_start();
while ($row = mysqli_fetch_array($result)) {
 if($_SESSION['myjourneytime']==$row['time'])
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
   	
	$intprice=(int)$row['PRICE'];
	echo $int*$intprice;
	
   echo "</td>";
   echo "<td> $noofpassenger </td>";
   echo "<td>$class</td>";
   echo "<td>$typejourney</td>";
   echo "</tr>";
  
   }
   //else
   //{
		//$p=1;
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









