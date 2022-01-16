<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
<?php
error_reporting(E_ERROR | E_PARSE);
if(!empty($_POST["username"]) && !empty($_POST["password"]))
{
$DBHOST = "localhost:8111";
$DBUSER = "root";
$DBPWD = "";
$DBNAME = "auction2";

$conn = new mysqli($DBHOST, $DBUSER, $DBPWD, $DBNAME);
if($conn->connect_error)
{
die("Connection failed!".$conn->connect_error);
}
 
$username = $_POST["username"];
$statement = "SELECT * FROM buyer WHERE username=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$hash = $row["password"]; 

if(password_verify($_POST["password"], $hash))
{
	echo "Giriş başarılı!";
	session_start();
	$_SESSION["username"] = $_POST["username"];
	$conn->close();
	header("Location: display_items.php");
}

else
{
 $conn->close();
header("Location:relogin.php");
}/*verifies if user has entered correct password*/
}

else
{
header("Location:login.php");
} /*verify user not directly accessing this page */

?>



</body>
</html>


