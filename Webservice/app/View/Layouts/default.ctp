<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
</head>
<body>
	<div id="container">
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
