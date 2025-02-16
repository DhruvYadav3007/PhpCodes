<?php
	$num = 0;
	$num2 = 1;
	$temp = 0;
	$nterms=10;
	for($i = 0; $i<$nterms; $i++){
		echo "$num". "<br>";
		$temp = $num2;
		$num2 = $num + $num2;
		$num = $temp;
	}
	echo "This code is executed by Dhruv Yadav!";
?>