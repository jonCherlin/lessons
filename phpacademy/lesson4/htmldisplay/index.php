<?php

$name = "jonathan";

if ($name == "jonathan") {
	echo "Hi, Jonathan.";
}
else {
?>
	You're not Jonathan? Please type your name:<br />
	<form action="index.php" method="POST">
	<input type="text" name="name"> <input type="submit" value="Submit">
	</form>
<?php	
}

?>