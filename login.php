<!DOCTYPE html>
<html>
<body>
<form action="/" method="post">
 Логин: <input type="text" name="login" />

 Пароль: <input type="password" name="password" />
 <input type="submit" value="Войти" name="log_in" />

 </form>
<?
include ('lib/connect.php'); 
include ('lib/module_global.php'); 

 
if($_GET['action'] == "out") out(); 
 
if (login()) 

{
	$UID = $_SESSION['id']; 
	$admin = is_admin($UID); 

}
else 
{
	if(isset($_POST['log_in'])) 
	{
		$error = enter();

		if (count($error) == 0) 
		{
			$UID = $_SESSION['id'];

			$admin = is_admin($UID);
		}
	}
}


?>
</body>
</html>
