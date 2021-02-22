<?php

/**
 * Stampa un tag HTML button che ha testo = $testo e id = $id
 *
 * @param [string] $testo
 * @param [string] $id
 * @return void
 */
function print_button($testo, $id){
	echo "<button id = '" . $id . "'>" . $testo . "</button>";
}

/**
 * Stampa un tag HTML DIV che ha classe = $classe e id = $id
 *
 * @param [string] $classe
 * @param [string] $id
 * @return void
 */
function print_div($classe, $id){
	echo "<div class = '" . $classe . "' id = '" . $id . "'></div>";
}

/**
 * Stampa un certo numero di immagini
 *
 * @param [string] $nomeFile
 * @param [string] $classe
 * @param [int] $quantita
 * @return void
 */
function print_images($nomeFile, $classe, $quantita){
	for ($i=0;$i<$quantita;$i++){
		print_image( $nomeFile,  $classe );
	}
}

/**
 * Stampa un'immagine
 *
 * @param [string] $nomeFile
 * @param [string] $classe
 * @return void
 */
function print_image($nomeFile, $classe){
	echo "<img class = '" . $classe . "' src = '" . $nomeFile . "'>";
}

?>