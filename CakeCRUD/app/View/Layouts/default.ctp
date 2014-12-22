<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>    <!-- #adds charset utf 8 -->
	<title>
		<?php echo $this->fetch('title'); ?> <!-- #fetches $title_for_layout variable from chield view -->
	</title>
	<?php
		echo $this->Html->meta('icon');   # adds meta tags

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');    
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">

	    <!-- Header loader -->
		<div id="header">
			
		</div>

        

        <!-- Chield View loader -->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>



         <!-- Footer -->
		<div id="footer">
			
			
		</div>

	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
