<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add data to the database</title>
</head>
<body>
	<h1>Add Post</h1>
	<?php
	 echo $this->Form->create('Post');
	 //create method takes the model name;here model name is Post.
	echo $this->Form->input('title');//input takes the field name in the table
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->end('Save Post');
	?>
</body>
</html>