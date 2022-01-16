<html>
<head><title></title>	

<link rel="stylesheet" type="text/css" href="style.css">
	 	
</head>


<body>
<?php 
error_reporting(E_ERROR | E_PARSE);
echo "<img src='auction_logo.jpg' id='logo'/>";
echo "<br>";
echo "<form class='add_item_form' action='check_item.php' method='POST'  enctype='multipart/form-data'>";
echo "<div style='margin-bottom: 12px!important;'><a href='display_items.php' class='button'>Geri Dön </a></div>";	
if(isset($_GET["item"]))
{

if($_GET["item"]=="duplicate")
{
	echo "<h4>Bu ürün zaten mevcut!</h4>";
	echo "<br>";
	echo "<h4>Lütfen tekrar deneyin.</h4>";
 
}

else if($_GET["item"]=="successful")
{
echo "<h4>Ürün Başarıyla Eklendi!</h4>";
} 

}
 
else
{
echo "<h4>Lütfen ürün ekleyiniz.</h4>";
}

echo "<label for='item_name' class='label'>Ürün Adı:</label>";
echo "<input class='text'  type='text' name='item_name'/>";
echo "<br>";
echo "<label for='item_description'  class='label'>Ürün Tanımı:</label>";
echo "<input class='text'  type='text' name='item_description'>";
echo "<br>";
echo "<label for='endtime'  class='label'> Sona Erme Süresi: </label>";
echo "<input  class='text'  type='text' name='endtime'>";
echo "<br>";
echo "<label for='item_pic'  class='label'>Ürünün Fotoğrafı: </label>";
echo "<input class='text'  type='file' value='item_pic' name='item_pic'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Ürün Ekle'/>";

echo "</form>";
?>

</body>
</html>