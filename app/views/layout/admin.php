<!DOCTYPE html>
<html>
<head>
	<base href="http://127.0.0.1:70">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin/style.css">
	<link href='http://fonts.googleapis.com/css?family=Play&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<script src="//code.jquery.com/jquery-1.11.3.min.js" defer></script>
</head>
<body>
	<aside>
		<h3 class="text-center">Admin</h3>

		<ul class="menu">
			<li><a href="/admin/show-panel">Главная</a></li>
			<li><a href="/admin/show-articles">Статьи</a></li>
		</ul>
	</aside>

	<div id="content" class="w-limmiter">
		<?php
			include $view;
		?>
	</div>
</body>
</html>
