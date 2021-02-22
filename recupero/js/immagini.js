// aggancio le funzioni alla pressione dei pulsanti
document.getElementById("btnSinistra").addEventListener("click", aggiungi_sinistra);
document.getElementById("btnCentro").addEventListener("click", aggiungi_centro);
document.getElementById("btnDestra").addEventListener("click", aggiungi_destra);
document.getElementById("btnFluido").addEventListener("click", aggiungi_fluido);

//funzione che rimuove le classi aggiunte in precedenza e aggiunge la classe "sinistra"
function aggiungi_sinistra() {
	aggiungi_classe("sinistra");
}

//funzione che rimuove le classi aggiunte in precedenza e aggiunge la classe "sinistra"
function aggiungi_destra() {
	aggiungi_classe("destra");
}

//funzione che rimuove le classi aggiunte in precedenza e aggiunge la classe "centrato"
function aggiungi_centro() {
	aggiungi_classe("centrato");
}

//funzione che rimuove le classi aggiunte in precedenza e aggiunge la classe "centrato"
function aggiungi_fluido() {
	aggiungi_classe("fluido");
}

function aggiungi_classe(classe) {
	//trova tutti gli elementi con classe immagine
	var mieImg = document.getElementsByClassName("immagine");

	//ad ogni elemento trovato aggiungi la classe "classe"
	//e togli le altre classi
	for (i = 0; i < mieImg.length; i++){
		togliClassi(mieImg[i]);
		mieImg[i].classList.add(classe);
	}
}

//funzione che rimuove le classi aggiunte in precedenza e aggiunge la classe "fluido"

//funzione che rimuove le classi aggiunte in precedenza
function togliClassi(element) {
	element.classList.remove("sinistra");
	element.classList.remove("centrato");
	element.classList.remove("destra");
	element.classList.remove("fluido");
}
