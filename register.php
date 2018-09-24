<html>
<?php
$name=$_GET["name"];
$phone=$_GET["phone"];
$bday=$_GET["bday"];
$address=$_GET["address"];
$gender=$_GET["gender"];
$email=$_GET["email"];
$userid=$_GET["userid"];
$pass=$_GET["password"];
$time=$_GET["time"];
mysqli_connect("localhost","root","","endeavour");
//mysql_select_db("endeavour");
$db = mysqli_connect('localhost','root','','endeavour')
 or die('Error connecting to MySQL server.');

$register = "INSERT INTO customer(name, phone,bday,address,gender,email,userid,pass,time) VALUES('$name','$phone','$bday','$address','$gender','$email','$userid','$pass','$time')";

$result = mysqli_query($db,$register); 
if($result){
echo "<script> window.location.assign('login_encrypt_pass2.html'); </script>";
} else{
echo("<br>Input data is fail");
}
?>
</html>