<?php

$m = $_GET["m"];
$n = $_GET["n"];

    //função recursiva
    function mdc($m, $n){
		if($n == 0) {
			return $m;
		} else {
			return mdc($n, $m % $n);
		}
	}
					
	$mmc = ($m * $n) / mdc($m, $n); 
	
	echo "O Resultado do MDC é " . mdc($m, $n) . "<br>";
	echo "<br>";
	echo "O Resultado do MMC é " . $mmc . "<br>";
	
?>