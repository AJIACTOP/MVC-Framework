<!DOCTYPE html>
<html>
<head>
	<base href="http://127.0.0.1:70">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Play&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js" defer></script>
</head>
<body>
	<h1>Админ панель</h1>
	
	<div id="content">
		<?php
			include PROJ_PATH . 'app/views/' . $contentView;
		?>
	</div>
</body>
</html>
