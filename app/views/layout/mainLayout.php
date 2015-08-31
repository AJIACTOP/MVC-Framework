<!DOCTYPE html>
<html>
<head>
	<base href="http://127.0.0.1:70">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Play&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div id="topPanel">
		<ul class="w-limmiter">
			<li><a href="/" class="title">Home</a></li>
			<li><a href="/article" class="title">Article</a></li>
			<li><a href="/admin" class="title">Admin</a></li>
		</ul>
	</div>

	<div id="content" class="w-limmiter">
		<?php
			include VIEWS_PATH . $contentView;
		?>
	</div>
</body>
</html>
