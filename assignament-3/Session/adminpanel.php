<body bgcolor="aqua">
<center>
<?php
include("hesap.php");
session_start();
  
if(!isset($_SESSION["giris"]))
{
echo "Bu sayfayı görüntüleme yetkiniz yoktur.<br>";
echo "<a href=index.php>Giriş sayfası</a>";
}
else
echo "<h1>Admin Paneli<h2>";
?>
<img src="download.jpg" alt="strong" style="width:250px;height:250px;">
<br/>
<br/>

<?php
echo "<a href=\"index.php\">Çıkış Yap</a>";
?>
</center>

