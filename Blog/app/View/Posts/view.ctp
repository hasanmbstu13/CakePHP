<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
</head>
<body>
<!-- 	<pre>
	<?php print_r($post) ?>
</pre> -->
	<h1><?php echo h($post['Post']['title']); ?></h1>

	<p><?php echo h($post['User']['name']); ?></p>
	<p><?php echo h($post['User']['email']); ?></p>

	<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

	<p><?php echo h($post['Post']['body']); ?></p>

</body>
</html>
