<?php

include_once('resources/init.php');

$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts` WHERE `id` = 3 OR `title` = 'This is the first post'");

/*$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts` WHERE `id` = 3 AND `title` = 'Third post yay!!'");*/

/*$query = mysql_query("SELECT `title` FROM `posts` LIMIT 1,3");*/

/*$query = mysql_query("SELECT `title` FROM `posts` ORDER BY `id` DESC LIMIT 2");*/

/*$query = mysql_query("SELECT DISTINCT `title` FROM `posts`");*/

/*$query = mysql_query("SELECT COUNT(1) FROM `posts`");
$count = mysql_result($query, 0);

echo $count;*/

/*while ( $row = mysql_fetch_assoc($query) ) {
	?>
	<h2><a href="posts.php?id="> <?php echo $row['title']; ?> </a></h2>
	<?php
	

}*/

while ( $row = mysql_fetch_assoc($query) ) {
	?>
	<h2><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a></h2>
	<p> <?php echo $row['contents']; ?> </p>
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