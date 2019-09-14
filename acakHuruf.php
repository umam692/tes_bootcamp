<?php 

function acakAngkaHuruf($panjang)
{
	$karakter='abcdefghijklmnopqrstuvwxyz1234567890';
	$string = '';

	for ($i=0; $i < $panjang ; $i++) { 
		$pos = rand(0, strlen($karakter)-1);
		$string .= $karakter{$pos};
	}
	return $string;
}

// echo acakAngkaHuruf(32);
// echo "<br>";
// echo acakAngkaHuruf(32);
// echo "<br>";
// echo acakAngkaHuruf(32);

function cetak($banyak){
	for ($i=0; $i < $banyak ; $i++) { 
		echo acakAngkaHuruf(32);
		echo "<br>";
	}
}

echo cetak(3);
 ?>
