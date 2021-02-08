<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista rzeczy które kukanq lubi</title>
</head>
<body>
	Lista rzeczy które kukanq lubi
	<ul>
		<?php foreach ($dane as $rzecz) : ?>
			<li><?= $rzecz ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>