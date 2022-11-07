<?php
$kullanici = "ByAdmin";
$sifre = "qwerty";
setcookie($kullanici, $sifre, time() + (60*60*24), "/");
if (isset($_POST['username'])&& isset($_POST['password'])) {
	
	if ($_POST['username'] == $kullanici && $_POST['password'] == $sifre) {
        require "giris.php"; exit();
	}
	else {
		echo "<h2>Hatalı Giriş</h2>";
		echo "<a href=index.php>Geri dön</a>";
	}
}
?>

<html>
<head>
<meta charset = "utf-8" />
<title>Giriş Yap</title>
</head>
<body>
<br/><br/><br/><br/><center>
<form method="post">

	<p>Kullanıcı Adı: <input name="username" type="text" 
	value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"> </p>
	<p>Şifre                  : <input name="password" type="password" 
	value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> </p>

	<p><input type="submit" value="Giris"></p>
</form>
</center>
</body>
</html>