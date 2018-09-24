<html>
<?php


$user=$_GET["userid"];
$pass=$_GET["password"];
$new_pass=$_GET["new_password"];
$time=$_GET["time"];

$db = mysqli_connect('localhost','root','','endeavour')
 or die('Error connecting to MySQL server.');


$sql = "select * from  customer";
$result=mysqli_query($db,$sql);
while ($row = mysqli_fetch_array($result)) {
 if($user==$row['userid'] && $pass==$row['pass'])
   {   
		$p=1; 
   }
   else
   {
		$p=0;
  }

}
if($p==1)
{
	$register ="Update customer SET pass='$new_pass',time='$time' where userid='$user' and pass='$pass' ";

	$result = mysqli_query($db,$register); 
	if($result){
		echo "<script> window.location.assign('login_encrypt_pass2.html'); </script>";
	} 
	
	else{
	
		echo("<br>Input data is fail");
	}

}



	
if($p==0)
	echo("Login Unsuccessful.");



?>
</html>