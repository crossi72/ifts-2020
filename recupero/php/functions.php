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

?>