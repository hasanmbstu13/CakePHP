<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
</head>
<body>
	<pre>
		<?php print_r($user); ?>
	</pre>
	<h1><?php echo h($user['User']['name']); ?></h1>

	<p><small>Email: <?php echo $user['User']['email']; ?></small></p>

	<p><?php echo h($user['User']['created_at']); ?></p>

</body>
</html>