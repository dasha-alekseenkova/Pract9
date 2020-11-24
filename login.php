<!DOCTYPE html>
<html>
<body>
<br /> 
<form method="post">
Username: <input type="text" name="user" /> <br /> 
Password: <input type="password" name="pass" /> <br />
<input type="submit" name="submit" value="Login" />
</form>
<?php
session_start();
$users = 'admin';
$pass = '1111';
 if($_POST['submit']){
 if($users == $_POST['user'] AND $pass == md5($_POST['pass']))
{
 $_SESSION['admin'] = $users;
 header("Location: redirected.php");
 exit;
 }
else 
	header("Location: redirected.php");
 exit;
} 
?>
</body>
</html>
