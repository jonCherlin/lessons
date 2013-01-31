<?php

include_once('resources/init.php');

$query = mysql_query("SELECT `id`, `title`, `contents` FROM `posts`");

while ( $row = mysql_fetch_assoc($query) ) {
	?>
	<h2><a href="posts.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?> </a></h2>
	<p> <?php echo $row['contents']; ?></p>
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