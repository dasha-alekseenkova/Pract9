<!DOCTYPE html>
<html>
<body>
<?php
session_start();
 if($_SESSION['admin'] != "admin"){
 header("Location: login.php");    
exit; 
}
?>
</body>
</html>