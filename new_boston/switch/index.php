<?php

/*$number = 1;

switch ($number) {
	case 1:
		echo 'One';
	break;
	case 2:
		echo 'Two';
	break;
	case 3:
		echo 'Three';
	break;
	
	default:
		echo 'Number not found';
	break;
}*/

$day = 'Monday';

switch ($day) {
	case 'Saturday':
	case 'Sunday':
		echo 'It\'s a weekend.';
	break;
	
	default:
		echo 'It\'s a weekday.';
	break;
}

?>