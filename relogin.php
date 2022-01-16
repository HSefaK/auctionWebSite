<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">
	
 
</head>
<body>
<?php
error_reporting(E_ERROR | E_PARSE);
echo "<img src='auction_logo.jpg' id='logo'>";
echo "<br>";
echo "<form class='relogin_form' action='check_login.php' method='POST'>";
echo "<h4>Please Login Again</h4>";
echo "<label for='username' class='label'> Kullanıcı Adı:</label>";
echo "<input class='text' type='text' name='username' placeholder='Kullanıcı Adı'>";
echo "<br>";
echo "<label for='password' class='label'>Şifre:</label>";
echo "<input  class='password' type='password' name='password' placeholder='Şifre'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Giriş Yap'/>";	
echo "</form>";
	?>
</body>
</html>


