<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Esempio di gestione delle immagini</title>
	<link rel="stylesheet" href="css/immagini.css">
</head>
<body>
	<?php
        /* Richiamo della funzione dei button */ 
        require "php/functions.php";
		print_button("sinistra", "btnSinistra"); /* allinea le immagini con classe sinistra*/
		print_button("centro", "btnCentro"); /* allinea le immagini con classe centro*/
		print_button("destra", "btnDestra"); /* allinea le immagini con classe centro*/
		print_button("fluido", "btnFluido"); /* allinea le immagini con classe fluido*/

        echo "<hr>";

		print_images("img/immagine.jpg", "immagine", 10);
    ?>
</body>
<script src="js/immagini.js"></script>
</html>