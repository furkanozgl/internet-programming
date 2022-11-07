<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
} else {setcookie("username","");
	setcookie("password","");}
?>

<html>
<head>
   <title>Admin Panel</title>
  </head>
  <body bgcolor="aqua">
  <center>
  <img src="download.jpg" alt="strong" style="width:250px;height:250px;">
 <br/><br/><br/><br/>
  <form action="index.php" style="text-align:center;">
 <input type="submit" name="logout" value="Çıkış Yap">
</form>
  </body>
</html>


