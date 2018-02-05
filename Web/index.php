<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>my web page</title>
</head>
<body>
	<h1>welcome to my shop</h1>
	<ul>
		<?php
			$json 	= file_get_contents('http://api');
			$obj 	= json_decode($json);

			$products = $obj->product;
			foreach ($products as $product) {
				echo "<li>$product</li>";
			}
		?>
	</ul>
</body>
</html>