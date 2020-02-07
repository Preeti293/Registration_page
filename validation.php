<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con)
	{
	echo "connection success";

}else{echo"error"; 
}
mysqli_select_db($con,'session');

$name=$_POST['username'];
$pass=$_POST['password'];
$q ="select*from users where username='$name' && password='$pass'";
$result =mysqli_query($con,$q);
$num =mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$name;
	

header('location:home.php');

}
else {
header('location:loginn.php');

}
?>