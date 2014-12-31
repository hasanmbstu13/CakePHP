<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add data to the database</title>
</head>
<body>
	<h1>Please fill up the information of new users</h1>
	<?php
	echo $this->Form->create('User');//create method takes the model name; here model name is Post.
	echo $this->Form->input('name');//input takes the field name in the table
	echo $this->Form->input('email');
	echo $this->Form->end('Save new User');
	?>
</body>
</html>