<html>
<head><title></title>

 <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>
<?php
error_reporting(E_ERROR | E_PARSE);
echo "<img src='auction_logo.jpg' id='logo'>";
echo "<br>";
echo "<form action='check_login.php' class='login_form' method='POST'>";
echo "<h4> Lütfen Giriş Yapın</h4>";
echo "<label for='username' class='label'> Kullanıcı Adı:</label>";
echo "<input class='text' type='text' name='username' placeholder='Kullanıcı Adı'>";
echo "<br>";
echo "<label for='password' class='label'>Şifre:</label>";
echo "<input  class='password' type='password' name='password' placeholder='Şifre'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Giriş Yap'/>";	
echo "<a href='add_buyer.php'><input class='submit' type='button' value='Kayıt Ol'/></a>";	
echo "</form>";
?>
</body>
</html>


