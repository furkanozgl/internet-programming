<html>
	<head>
	<meta charset="utf-8" />
	</head>
	<body>
	<form action="" method="POST">

	<label for="ilksayi"> Birinci Sayı</label>
	<br>
	<input type="number" id="ilksayi" name="ilksayi">
	<br>
	<br>
	<select name="islem_tipi">
		<option value="toplama">Toplama</option>
		<option value="cikarma">Çıkarma</option>
		<option value="carpma">Çarpma</option>
		<option value="bolme">Bölme</option>
	</select>
	<br>
	<br>
	<label for="ikisayi">İkinci Sayı</label><br>
	<input type="number" id="ikisayi" name="ikisayi">
	<br>
	<br>
	<button type="submit" name="hesap">Hesapla</button>
	 <br>
	 <br><br><br> <span style="font-size:2rem;"> Sonuç: 
	<?php
	
		@$sayi1=$_POST["ilksayi"];
		@$sayi2=$_POST["ikisayi"];
		@$islem=$_POST["islem_tipi"];

		if(isset($_POST["hesap"])){
			switch ($islem) {
				case 'toplama':
					echo $sayi1+$sayi2;
					break;
					case 'cikarma':
						echo $sayi1-$sayi2 || $sayi2 - $sayi1;
						break;	
						case 'bolme':
							echo $sayi1/$sayi2 || $sayi2 / $sayi1;
							break;
							case 'carpma':
								echo $sayi1*$sayi2  ;
								break;
				default:
					echo "Herhangi bir işlem seçilmedi";
					break;
			}
		}
	?>
	 
	</span>

	</form>
	

	<?php
	
	

	?>

	</body>
</html>