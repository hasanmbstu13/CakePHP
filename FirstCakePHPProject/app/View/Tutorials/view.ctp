<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>This is my first cakephp MVC code!</h1>
	<table>
		
		<tr>
			<th>Name</th>
			<th>Mobile</th>
			<th>Address</th>
		</tr>

		<?php foreach ($turorial as $jekono) {?>
			<tr>
				<td><?php echo $jekono['Tutorial']['name'];?></td>
				<td><?php echo $jekono['Tutorial']['mobile'];?></td>
				<td><?php echo $jekono['Tutorial']['address'];?></td>
			</tr>
		<?php } ?>

	</table>
</body>
</html>