<html> 
<head> 
<title>Add New Database Record</title> 
</head> 
<body> 
<center>
<h1>Admin Main Screen</h1> 
<hr> 
<?php include 'menu.php';?>

<hr /> 
<form name="login" action="adminlogin.php" method="post">
<br><p>Username : <input type="text" name="username" required/></p>
<p>Password : <input type="password" name="password" required/></p>

<p><input type="submit" value="Login" />
<input type="reset" value="Clear" /></p>
</center>
</form>
</center>

</body>
</html>
