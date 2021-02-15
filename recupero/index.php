<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recupero</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
		require "php/functions.php";
		/*per tre volte chiama la funzione print_button, passando 
		- blu, btnBlu
		- verde, btnVerde
		- rosso, btnRosso
		*/
		print_button("rosso", "btnRosso");
		print_button("verde", "btnVerde");
		print_button("blu", "btnBlu");

		/*
		per dieci volte chiama la funzione print_div, passando "quadrato bianco"
		*/
		for ($i = 1; $i <= 10; $i++){
			print_div("quadrato bianco", $i);
		}
	?>
</body>
</html>