<?php
	$m= $_POST["m"];
	$n1=1;
	$n2=0;
	$matriz[$m][$m];
	$fibonacci = 1;
		for($i=0; $i<=$_POST ["m"]; $i++){
			for($j=0; $j<=$_POST ["n"]; $j++){
			$suma = $n1 + $n2;
			$n1 = $n2;
			$n2 = $suma;

			}
		}
		for($i=0; $i<=$_POST ["m"]; $i++){
			for($j=0; $j<=$_POST ["n"]; $j++){
				echo $suma[i][j];
			}
		}
	