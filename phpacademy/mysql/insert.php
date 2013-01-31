<?php

include_once('resources/init.php');

if ( isset($_POST['title'], $_POST['post'])) {
	
	$title = mysql_real_escape_string(htmlentities($_POST['title']));
	$post = mysql_real_escape_string(htmlentities($_POST['post']));
	
	$query = "INSERT INTO `posts` SET
					`title` = '{$title}',
					`contents` = '{$post}'";

	//mysql_query($query);
}

?>

<html>
<head>
	<title>Add a post!</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<style type="text/css">
		label { display:block; }
	</style>
</head>
<body>
	<div id="main">
		<form method="post" action="">
			<div>
				<label for="title">Title:</label>
				<input type="text" name="title" id="title" />
			</div>
			<div>
				<label for="post">Post:</label>
				<textarea name="post" id="post"rows="15" cols="50"></textarea>
			</div>
			<div>
				<input type="submit" value="Post"/>
			</div>
		</form>
	</div>
</body>
</html>