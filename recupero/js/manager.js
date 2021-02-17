//aggancio gli eventi ai pulsanti: la pressione di ogni pulsante chiama una funzione
document.getElementById("btnRosso").addEventListener("click", aggiungi_rosso);
document.getElementById("btnVerde").addEventListener("click", aggiungi_verde);
document.getElementById("btnBlu").addEventListener("click", aggiungi_blu);
document.getElementById("btnAlterna").addEventListener("click", alterna);

//funzioni: ogni funzione aggiunge una classe a tutti i div con classe "quadrato"
function aggiungi_rosso() {
	//trova tutti gli elementi con classe quadrato
	var mieiDiv = document.getElementsByClassName("quadrato");

	//ad ogni elemento trovato aggiungi la classe "rosso"
	//e togli le altre classi
	for (i = 0; i < mieiDiv.length; i++){
		togliClassi(mieiDiv[i]);
		mieiDiv[i].classList.add("rosso");
	}
}

function aggiungi_verde() {
	//trova tutti gli elementi con classe quadrato
	var mieiDiv = document.getElementsByClassName("quadrato");

	//ad ogni elemento trovato aggiungi la classe "verde"
	//e togli le altre classi
	for (i = 0; i < mieiDiv.length; i++){
		togliClassi(mieiDiv[i]);
		mieiDiv[i].classList.add("verde");
	}
}

function aggiungi_blu() {
	//trova tutti gli elementi con classe quadrato
	var mieiDiv = document.getElementsByClassName("quadrato");

	//ad ogni elemento trovato aggiungi la classe "blu"
	//e togli le altre classi
	for (i = 0; i < mieiDiv.length; i++){
		togliClassi(mieiDiv[i]);
		mieiDiv[i].classList.add("blu");
	}
}

function alterna(){
	//cambio colore ad ogni elemento, alternandolo ogni tre elementi
	var mieiDiv = document.getElementsByClassName("quadrato");

	//ad ogni elemento trovato aggiungi la classe corretta in base all'indice
	for (i = 0; i < mieiDiv.length; i = i + 3){
		togliClassi(mieiDiv[i]);
		mieiDiv[i].classList.add("rosso");
	}
	for (i = 1; i < mieiDiv.length; i = i + 3){
		togliClassi(mieiDiv[i]);
		mieiDiv[i].classList.add("verde");
	}
	for (i = 2; i < mieiDiv.length; i = i + 3){
		togliClassi(mieiDiv[i]);
		mieiDiv[i].classList.add("blu");
	}
}

function togliClassi(element) {
	element.classList.remove("rosso");
	element.classList.remove("verde");
	element.classList.remove("blu");
}
