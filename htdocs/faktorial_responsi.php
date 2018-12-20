<?php
	function faktorial($nilai){
		$F = 1;
		for ($i=1;$i<=$nilai;$i++){
		$F = $F*$i;
		}
		return $F;
	}
	$hasil = faktorial($_POST["angka"]);
	echo("NILAI DARI ".$_POST["angka"]."! = ".$hasil);
?>