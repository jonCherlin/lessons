<?php

function calc($num1, $num2, $op) {
	switch ($op) {
		case "+":
		$total = $num1 + $num2;
		return $total;
		break;
		
		case "-";
		$total = $num1 - $num2;
		return $total;
		break;
		
		case "*";
		$total = $num1 * $num2;
		return $total;
		break;
		
		case "/";
		$total = $num1 / $num2;
		return $total;
		break;
		
		default:
		echo "Unknown operator.";
	}
}

echo calc(2, 2, "+");

?>