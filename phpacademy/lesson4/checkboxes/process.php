<?php

//checkboxes

/*if(isset($_POST['agree']) && $_POST['agree'] == 'on') {
	echo 'Set, and correct value.';
}
else {
	echo 'You must agree to the Terms & Conditions.';
}*/

//radio

if(isset($_POST['language'])) {
	$language = $_POST['language'];
	echo 'You selected '.$language.'.';
}

?>