<?php
$arr = array("Lia" => 80, "Fitra" => 90, "Nova"=> 75, "Reza" =>85);
echo "Tampilkan dengan foreach : <br>";
foreach($arr as $nama => $nilai){
	echo "Nilai $nama = $nilai<br>";
}
reset($arr);
echo "<br>Tampilkan dengan while & list : <br>";
while (list ($nama, $nilai) = each($arr)){
	echo "Nilai $nama = $nilai<br>";
}
echo "<br><br> Struktur Awal";

echo "<pre>";
print_r($arr);
echo "</pre>";

asort($arr);
reset($arr);

echo "Setelah di asort";

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "pointer berada di nilai: ";
$in = current($arr)."<br>";
echo $in;

if (in_array ("85",$arr)){
	echo "nilai 85 ada<br>";
}else{
	echo "nilai 85 tidak ada<br>";
}

echo "Nilai 90 berada di kunci ";
echo array_search("90",$arr) ."<br>";

if (array_key_exists("1",$arr)){
	echo "kunci 1 ada<br>";
}else{
	echo "kunci 1 tidak ada<br>";
}

reset($arr);
$cari = "Lia";
echo "<br> Mencari posisi key string <br>";
echo "yang dicari $cari<br>";
for ($i=0;$i<count($arr);$i++){
	if(key($arr)==$cari){
		echo "Posisi di $i";
		exit;
	}else{
		next($arr);
	}
}

?>