<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">

	 </head>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<a href='display_items.php' class='button'>Geri Dön </a>";	
echo "<img src='auction_logo.jpg' id='logo'/>";
echo "<br>";
echo "<form class='delete_item_form' action='check_delete_item.php' method='POST'>";
	if(isset($_GET["item"]))
	{

	if($_GET["item"]=="no_item")
	{
		echo "<h4>Ürün mevcut değil!</h4>";
		echo "<br>";
		echo "<h4>Tekrar Deneyin Lütfen!</h4>";
 
	}

	else if($_GET["item"]=="successful")
	{
	echo "<h4>Ürün başarılı bir şekilde silindi!</h4>";
	} 


	}
 
	else
	{
	echo "<h4>Silmek istediğniz ürünün adını girin!</h4>";
	}
	

echo "<label for='item_name' class='label'>Ürünün Adı: </label> <input class='text' type='text' name='item_name' placeholder='Ürün Adı'>";
echo "<input class='submit' type='submit' value='Ürünü Sil'/>";	
echo "</form>";

?>
</body>
</html>


