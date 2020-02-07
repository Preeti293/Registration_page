<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<h1> Sign Up!</h1>
			<h3>Register new user.</h3>
			<form action="registration.php" method="post">
					<div class="form-group">
					 <label for="username"><b> username</b></label>

          <input class="form-control" type="text" name="username" required>
           <label name="password" ><b>password</b></label>
           
         <input   class="form-control" type="password" name="password" required>
           <br>
          <br>
         <button type="submit">Sign up</button>
         

</div>
</form>





		</div>
	</div>
</div>
<br>
<br>

<div class="col-lg-6">
	<h1>Login</h1>
		<form action="registration.php" method="post">
				<div class="form-group">
					 <label for="username"><b> username</b></label>

          <input class="form-control" type="text" name="username" required>
           <label name="password" ><b>password</b></label>
           
         <input   class="form-control" type="password" name="password" required>
           <br>
          <br>
         <button type="submit">login</button>
     </div>
 </form>
</div>

</body>
</html>