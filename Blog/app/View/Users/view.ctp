<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
</head>
<body>
	
	<h1><?php echo h($user['User']['name']); ?></h1>

	<p><small>Email: <?php echo $user['User']['email']; ?></small></p>

	<p><?php echo h($user['User']['created_at']); ?></p>

</body>
</html>