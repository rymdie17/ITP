<html>
	<body>
		<form action="" method="post">
			<table border="0">
				<tr><td>Birinci: </td><td><input type="text" name="birinci"></td></tr>
				<tr><td>İkinci: </td><td><input type="text" name="ikinci"></td></tr>
				<tr><td>Metin: </td><td><input type="text" name="metin"></td></tr>
				<tr align="right"><td></td><td><input type="submit" name="button" action="Gönder"></td></tr>
			</table>
		</form>



		<?php
			if (isset($_POST["button"])) {
				
				$Birinci = $_POST["birinci"];
				$İkinci = $_POST["ikinci"];
				$Metin = $_POST["metin"];
				
				echo $Birinci."<br>";
				echo $İkinci."<br>";
				echo $Metin."<br>";
				
				$Toplam = $Birinci + $İkinci;
				$Cikar = $Birinci - $İkinci;
				$Carp = $Birinci * $İkinci;
				$Bol = $Birinci / $İkinci;
				$Mod = $Birinci % $İkinci;
				$Birinci++;
				$İkinci--;
				$Birlestir = $Birinci.$Metin;
				
				echo $Toplam."<br>";
				echo $Cikar."<br>";
				echo $Carp."<br>";
				echo $Bol."<br>";
				echo $Mod."<br>";
				echo $Birinci."<br>";
				echo $İkinci."<br>";
				echo $Birlestir;
			}
			
		?>


	</body>
</html>