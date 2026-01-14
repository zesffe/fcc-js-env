<!doctype html>

<?php
	
	$js = file_get_contents(__DIR__ . '/js.js');

?>

<html lang="en">

	<head>

		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32.png"/>
		<link rel="icon" type="image/png" sizes="192x192" href="img/favicon-192.png"/>
		
		<script type="text/javascript">
			<?= $js ?>
		</script>

	</head>

	<body style="display:flex; justify-content: center;">
		
		<pre style="width:50vw">
			<?= $js ?>
		</pre>

	</body>

</html>