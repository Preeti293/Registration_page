<?php
session_start();
if(!isset($_SESSION['name'])){
	header('location:loginn.php');
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container">

	<h1 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h1>
	<a href="logout.php">LOGOUT</a>

</body>
</html>