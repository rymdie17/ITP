<html>

<body>
	<table border="3cm">
		<tr>
			<td></td>
			<td>Buğday</td>
			<td>Arpa</td>
			<td>Mısır</td>
			<td>Tütün</td>
		</tr>
		<tr>
			<td>2005</td>
			<td>145</td>
			<td>90</td>
			<td>210</td>
			<td>55</td>
		</tr>
		<tr>
			<td>2006</td>
			<td>167</td>
			<td>60</td>
			<td>120</td>
			<td>65</td>
		</tr>
		<tr>
			<td>2007</td>
			<td>180</td>
			<td>45</td>
			<td>130</td>
			<td>121</td>
		</tr>
		<tr>
			<td>2008</td>
			<td>317</td>
			<td>120</td>
			<td>134</td>
			<td>152</td>
		</tr>
		<tr>
			<td>2009</td>
			<td>62</td>
			<td>261</td>
			<td>34</td>
			<td>135</td>
		</tr>
	</table>

	<?php
	
			
			$arabalar = array("Honda", "Volvo", "BMW", "Toyota");
			echo $arabalar[3]; //
			
			$arabalar["Toyota"] = "Japonya";
			$arabalar["Tesla"] = "Amerika";
			$arabalar["BMW"] = "Almanya";
			$arabalar["Honda"] = "Japonya";
			
			echo $arabalar["Tesla"];
			

	$uretim = array(
		"2005" => array("Buğday" => 145, "Arpa" => 90, "Misir" => 210, "Tutun" => 55),
		"2006" => array("Buğday" => 167, "Arpa" => 60, "Misir" => 120, "Tutun" => 65),
		"2007" => array("Buğday" => 180, "Arpa" => 45, "Misir" => 130, "Tutun" => 121),
		"2008" => array("Buğday" => 317, "Arpa" => 120, "Misir" => 134, "Tutun" => 152),
		"2009" => array("Buğday" => 62, "Arpa" => 261, "Misir" => 34, "Tutun" => 135),
	);

	echo "2005 yılı mısır üretimi " . $uretim["2005"]["Misir"] . " tondur" . "<br>";
	$toplam_misir = $uretim["2005"]["Misir"] +
		$uretim["2006"]["Misir"] +
		$uretim["2007"]["Misir"] +
		$uretim["2008"]["Misir"] +
		$uretim["2009"]["Misir"];
	echo "Toplam Mısır Üretimi " . $toplam_misir . " tondur" . "<br>";



	$a = array("elma", "muz");
	$b = array("kayısı", "çilek", "vişne");
	$c = $a + $b;
	echo ($c[0] . "<br>");
	echo ($c[1] . "<br>");
	echo ($c[2] . "<br>");
	echo sizeof($c);

	echo "<br>";

	$c = array_merge($a, $b);
	echo ($c[0] . "<br>");
	echo ($c[1] . "<br>");
	echo ($c[2] . "<br>");
	echo ($c[3] . "<br>");
	echo ($c[4] . "<br>");
	echo (sizeof($c));


	?>

</body>

</html>