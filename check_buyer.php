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
$password = $_POST["password"];
$hashed = password_hash($password, PASSWORD_DEFAULT);


$statement = "SELECT * FROM buyer WHERE username=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows>=1)
{
$value = "duplicate";
header("Location: add_buyer.php?buyer=$value");
}

else
{ 
$statement = "INSERT INTO buyer(username, password) VALUES(?, ?)";
$stmt = $conn->prepare($statement);
$stmt->bind_param("ss", $username, $hashed);
$stmt->execute();

$value = "successful";
header("Location: add_buyer.php?buyer=$value"); 
} /*verify if there is a duplicate user */

$conn->close();
} 

else
{
header("Location: add_buyer.php");
} /*verify user not directly accessing this page */

?>
</body>
</html>

