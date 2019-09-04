<?php
	for ($number = 1 ; $number<= 100 ;$number ++) {
		switch ($number) {
		    case $number % 3 === 0 && $number % 5 === 0:
		        echo "Linianos\n";
		        break;
		    case $number % 3 === 0:
		        echo "Linio\n";
		        break;
		    case $number % 5 === 0:
		        echo "IT\n";
		        break;
		    default:
		        echo $number."\n";
		}
	}
?>