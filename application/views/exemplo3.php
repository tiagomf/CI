<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exemplo 3</title>
</head>
<body>
	<header>
		<h1><?php echo $titulo; ?></h1>
	</header>
	
	<nav>
		<ul>
			<?php foreach($menu as $item); ?>
				<li><?php echo $item; ?></li>

		</ul>
	</nav>

	<div>
		<p><?php echo $texto; ?></p>
		<p><?php echo $segmento; ?></p>
	</div>
</body>
</html>