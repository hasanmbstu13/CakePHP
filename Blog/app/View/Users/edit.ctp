<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editing User Information</title>
</head>
<body>
	
	<h1>Edit User Info</h1>
	<?php
	echo $this->Form->create('User');
	echo $this->Form->input('name');
	echo $this->Form->input('email');
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end('Update User Info');
	?>
</body>
</html>