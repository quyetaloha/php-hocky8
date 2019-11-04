<?php
function daythua($n)
{
	$kq=1;
	for($i=1;$i<=$n;$i++){
		$kq*=$i;
	}
	return $kq;
}
echo daythua($_GET['so']);
?>