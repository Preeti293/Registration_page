<?php
session_start();
header('location:loginn.php');
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
if($num==1){echo"dup";

}
else {
$qy="insert into users(username,password) values('$name' , '$pass') ";
mysqli_query($con,$qy);

}





?>