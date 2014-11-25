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
			<h1><?php echo $this->Html->link('link', 'http://cakephp.org'); ?></h1>
		</div>

        

        <!-- Chield View loader -->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>



         <!-- Footer -->
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => '', 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			
		</div>

	</div>
	<?php #echo $this->element('sql_dump'); ?>
</body>
</html>
