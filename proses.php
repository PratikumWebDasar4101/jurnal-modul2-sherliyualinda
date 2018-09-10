<?php


function baris ($n){
	if ($n >= 1) {
		kolom($n);
		echo "<br>";
		$n--;
		baris ($n);
	}
}
function kolom ($baris,$kolom =1){
	echo "*";
	$kolom++;
	if ($kolom <=$baris)
		kolom ($baris,$kolom);
	
}
function genap_ganjil ($nilai){
	$genap = array();
	$ganjil = array();
	for ($a=1; $a <$nilai ; $a++) { 
		if ($a % 2==0) 
			array_push($genap, $a);
		else
			array_push($ganjil, $a);
	}
	echo "genap  :";
	for ($a=1; $a <count($genap) ; $a++) { 
		echo $genap[$a];
		if ($a != count($genap)-1) {
			echo ", ";
		}
	}
	echo "<br>";
	echo "genap  :";
	for ($a=0; $a <count($ganjil) ; $a++) { 
		echo $ganjil[$a];
		if ($a != count($ganjil)-1) {
			echo ", ";
		}
	}
	echo "<br>";
	echo "<br>";
	echo "Jumlah deret genap =". count($genap);
	echo "<br>";
	echo "Jumlah deret ganjil =". count($ganjil);
}
if (isset($_GET ["submit"])) {

		$n = $_GET ["n"];
		baris($n);
		genap_ganjil($n);
}



?>
