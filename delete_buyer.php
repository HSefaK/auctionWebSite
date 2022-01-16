<html>
<head><title></title>
	

 <link rel="stylesheet" type="text/css" href="style.css">
	 </head>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<img src='auction_logo.jpg' id='logo'/>";
echo "<br>";
echo "<form class='delete_buyer_form' action='check_delete_buyer.php' method='POST'>";
echo "<div style='margin-bottom: 12px!important;'><a href='delete_item.php' class='button'>Ürün Sil </a>";	
echo "<a href='display_items.php' class='button'>Geri Dön </a></div>";	
if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="no_account")
{
	echo "<h4>Kullanıcı Bulunamadı!</h4>";
	echo "<br>";
	echo "<h4>Tekrar Deneyin!</h4>";
 
}

else if($_GET["buyer"]=="deleted")
{
echo "<h4>Successfully Deleted User!</h4>";
}

else if($_GET["buyer"]=="wrong_password")
{
echo "<h4>Kullanıcı adı ve şifre uyuşmuyor!</h4>";
echo "<br>";
echo "<h4>Lütfen Tekrar Deneyin!</h4>";
}

 

}
 
 else
 {
 
echo "<h4>Hesabı silinecek kullanıcının, kullanıcı adı ve parolasını girin!</h4>";


 }

echo "<label for='username' class='label'>Kullanıcı Adı: </label><input class='text' type='text' name='username' placeholder='Kullanıcı Adı'>";
echo "<br>";
echo "<label for='password' class='label'>Şifre:</label><input class='password'  type='password' name='password' placeholder='Şifre'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Kullanıcıyı Sil'/>";	
echo "</form>";
echo "</div>";



?>
</body>
</html>


