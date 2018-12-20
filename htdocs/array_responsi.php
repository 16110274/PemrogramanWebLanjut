<?php
	$nilai = array("Lia" => 60, "Fahmi" => 89, "dona"=> 80, "Fiona" =>90, "Joni"=> 79, "Marni"=> 95, "jojo"=> 100, "Robbi"=> 60);
	$R = 0;
	
	echo "<pre>";
	print_r($nilai);
	echo "</pre>";

	reset($nilai);
	for ($i=0;$i<count($nilai);$i++){
		$R = $R + current($nilai);
		next($nilai);
	}
	$R = $R/count($nilai);
	echo('Rata-Rata nilai ujian : '.$R.'<br/><br/>');
	
	reset($nilai);
	for ($i=0;$i<count($nilai);$i++){
		if (current($nilai) >= $R){
			$string = "Diatas Rata-Rata";
		}else {
			$string = "Dibawah Rata-Rata";
		}
		
		echo ("Nilai ".key($nilai)." = ".current($nilai).", ".$string."<br/>");
		next($nilai);
	}
?>