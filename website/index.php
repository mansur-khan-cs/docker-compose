<html>
	<head>
		<title>MY Shop</title>
	</head>

	<body>
		<hl>Welcome to my shop</hl>
		<ul>
			<?php
				$json = file_get_contents(('http://product-service'));
				$obj = json_decode($json);
				$products = $obj->products;
				foreach ($products as $product) {
					echo "<li>$products</li>";
				}
			?>
		</ul>
	</body>