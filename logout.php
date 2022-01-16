<html>
<head><title></title> 
<link href="style.css" rel="stylesheet" type="text/css">
	
</head> 
<body>
	

<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(isset($_SESSION["username"]))
{
 
 
$_SESSION = array();
 
  

session_destroy();
 
echo "<h1 id='exit_title'>Tekrar Görüşmek Üzere! Kendinize İyi Bakın!</h1>";

 
}
else
{
header("Location:login.php");
}
?>


</body>
</html>