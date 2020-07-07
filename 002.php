<?php

function countWord($string, $kata)
{
	$kata = strtolower($kata);
	$string = $string;
	$string = preg_replace('/\s+/', ' ', trim($string));
	$string = explode(" ", $string);
	$hitung = 0;
	foreach ($string as $word) {
		if ($word == $kata)
		{
			$hitung++;
		}
	}
	echo $hitung;
}

$string = strtolower("Aku ingin begini
Aku ingin begitu
Ingin ini itu banyak sekali

Semua semua semua
Dapat dikabulkan
Dapat dikabulkan
Dengan kantong ajaib

Aku ingin terbang bebas
Di angkasa
Hei… baling baling bambu

La... la... la...
Aku sayang sekali
Doraemon

La... la... la...
Aku sayang sekali");

countWord($string, "Ingin");

?>