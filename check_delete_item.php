<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
	
<?php
error_reporting(E_ERROR | E_PARSE);
if(!empty($_POST["item_name"]))
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

 

$item_name = $_POST["item_name"];




$statement = "SELECT * FROM item WHERE item_name=?";

$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_name);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows<=0)
{
$value = "no_item";
	
header("Location:delete_item.php?item=$value");
}

else
{
	

$statement = "DELETE FROM item WHERE item_name=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_name);
$stmt->execute();

$value = "successful";
	
header("Location:delete_item.php?item=$value");

} /*check if such an item even exists */
 

$conn->close();
} /*if statement blocking direct access*/

else
{	
header("Location:delete_item.php");
} /*verify did the user access from the appropriate place */
?>
</body>
</html>

