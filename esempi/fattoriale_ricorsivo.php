<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$numero = 4;
		echo 'il fattoriale di ' . $numero . ' vale ' . fattoriale($numero);
	?>
</body>
</html>

<?php
	/**
	 * Calcola il fattoriale di un numero
	 *
	 * @param [integer] $valore
	 * @return integer
	 */
	function fattoriale($valore){
		//stop condition: il fattoriale di 1 è 1
		if ($valore == 1 ){
			return 1;
		}else{
			//uso la ricorsione: il fattoriale di un numero si ottiene moltiplicando
			//quel numero per il fattoriale del numero naturale che lo preecede
			$valore = $valore * fattoriale($valore - 1);

			return $valore;
		}
	}
?>