<?php

$m = $_POST["m"];
$n = $_POST["n"];
    
	echo "Os Mútiplos de " . $n . " em uma lista/array com o tamanho para " . $m . " elementos: <br>";
    for($i=1; $i<=$m; $i++){
		echo $vetor[$i] = $n * $i . "<br>";
		//print_r($vetor); //Mostra todo o array
	}
	
?>