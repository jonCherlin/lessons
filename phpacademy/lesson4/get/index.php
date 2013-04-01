<form action="index.php" method="GET">
	Name:<br><input type="text" name="name"><br>
	Age:<br><input type="text" name="age" size="5"><br><br>
	<input type="submit" value="Submit">
</form>
<?php

//the url is http://lessons.local/phpacademy/lesson4/get/index.php?name=Jonathan&age=28

$name = $_GET['name'];
$age = $_GET['age'];

if(isset($name) && isset($age) && !empty($name) && !empty($age)) {
	echo 'I am '.$name.' and I am '.$age.' years old.';
}
else {
	echo 'Please type something.';
}

?>