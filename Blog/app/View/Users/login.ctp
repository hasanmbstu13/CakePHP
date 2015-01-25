	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Log In Page</title>
	</head>
	<body>
		<h1>Log In<h1>
		<p>You will need to log in to edit any of the content.</p>
		<?php
		echo $this->Form->create('User');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->end(__('Login'));
		?>
	</body>
	</html>