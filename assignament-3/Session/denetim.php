<body bgcolor="aqua">
<center>
    <br/><br/><br/><br/>
<?php
include_once("hesap.php");
session_start();
  
if(($_POST["kullanici"]==$kullanici) and ($_POST["parola"]==$parola))
{
    header("Location:adminpanel.php");
    $_SESSION["giris"] = true;
    $_SESSION["kullanici"] = $kullanici;
    $_SESSION["parola"] = $parola;
}
else
echo "<h2>Hatalı Giriş</h2>";
echo "<a href=index.php>Geri dön</a>";

?>
</center>