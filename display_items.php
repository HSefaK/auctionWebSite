<html>
<head><title></title> 
 

 <link rel="stylesheet" type="text/css" href="style.css">
 
</head>

<body>
<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();

if(!isset($_SESSION["username"]))
{
	header("Location:login.php");
}

else
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
 
echo "<img src='auction_logo.jpg' id='logo'/>";
echo "<a href='logout.php' class='logout button'>Logout </a>";
echo "<div style='margin-bottom: 12px!important;'><a href='delete_buyer.php' class='button'>Yönetim </a>";	
echo "<a href='add_item.php' class='button'>Ürün Ekle </a></div>";
 
	
$statement = "SELECT * FROM item";
$result = $conn->query($statement);

while($row = $result->fetch_assoc())
{

$iid = $row["item_id"];
$iname= $row["item_name"];
$ipic = $row["item_pic"];
$icurrentp = $row["current_bid"];
$iimg = "item/";
$iimg = $iimg.$row["item_pic"];
 
 
$link = "item_details.php?item_id=";
$item_details = $link.$iid;
echo "<div class='item'>";	
echo "<div class='item_row'>Ürün NO: $iid</div>";
echo "<div class='item_row'>Ürün Adı: $iname</div>";
echo "<img class='item_img' src='$iimg' alt='image'>";
echo "<div class='item_row'>En Yüksek Teklif: $$icurrentp</div>";
echo "<div class='item_row' ><a class='link' href='$item_details'>Ürün Detayı</a></div>";
echo "</div>";

}/*display all the items on screen*/

$conn->close();
}/*prevent direct access by user*/
 
 
?>	
	
	
</body>
</html>