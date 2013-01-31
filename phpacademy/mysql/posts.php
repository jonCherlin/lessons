<?php

include_once('resources/init.php');

$query = mysql_query("SELECT `title` FROM `posts` LIMIT 1,3");

/*$query = mysql_query("SELECT `title` FROM `posts` ORDER BY `id` DESC LIMIT 2");*/

/*$query = mysql_query("SELECT DISTINCT `title` FROM `posts`");*/

/*$query = mysql_query("SELECT COUNT(1) FROM `posts`");
$count = mysql_result($query, 0);

echo $count;*/

while ( $row = mysql_fetch_assoc($query) ) {
	?>
	<h2><a href="posts.php?id="> <?php echo $row['title']; ?> </a></h2>
	<?php
	

}

?>
<html>
	<head>
		<title>Post List</title>
	</head>
	<body>
		<div id="main">
		
		</div>
	</body>
</html>