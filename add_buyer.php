<html>
<head><title></title>

 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>

<?php
error_reporting(E_ERROR | E_PARSE);
echo "<img src='auction_logo.jpg' id='logo'/>";
echo "<br>";
echo "<form class='add_buyer_form' action='check_buyer.php' method='POST'>";

if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="successful")
{
	echo "<h4>Kullanıcı Başarı ile Eklendi!</h4>";
	header("Location: index.php", TRUE, 301);
 
}

else if($_GET["buyer"]=="duplicate")
{
	echo "<h4>Kullanıcı Mevcut!</h4>";
 
}



}
 
else
{
echo "<h4>Lütfen Kullanıcı Adı ve Şifresini Yazınız</h4>";
}
echo "<label for='username' class='label'> Kullanıcı Adı:</label>";
echo "<input class='text' type='text' name='username' placeholder='Kullanıcı Adı'>";
echo "<br>";

echo "<label for='password' class='label'>Şifre:</label>";
echo "<input class='password' type='password' name='password' placeholder='Şifre'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Kullanıcı Ekle'/>";	
echo "</form>";
echo "</div>";
?>
</body>
</html>


