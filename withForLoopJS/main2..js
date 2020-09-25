/*
store names in array
*/

const autistaArr = [
	"Ammar Omar",
	"Bela Gocz",
	"Chiara Soldini",
	"Claudia Curcuruto",
	"Elisabetta Cavani",
	"Enrico Lacci",
	"Filippo Gelao",
	"Francesco Ascione",
	"Luca Vedovato",
	"Manuele Negri",
	"Rocco Cirrone",
	"Sergio Interlandi",
	"Stefano Jelec"
	];

var lenAut = autistaArr.length;


/*
function lowercase & trim whitespace
*/

function nomecognome(txt){
	let nc = txt.toLowerCase().replace(/\s+/g, '');
	return nc;
};


/*
store qualities in array
*/

const qualitaArr = [
	"moltoMale",
	"male",
	"solito",
	"buono",
	"moltoBuono"
	];

const qualitbArr = [
	":-((",
	":-(",
	":-||",
	":-)",
	";-))"
	];

var lenQual = qualitaArr.length;

/*
html#autistaBox.select + var i,q
*/

var ab = document.getElementById("autistaBox");


var i = 0;
var q = 0;


/*
html#qualitaSegni.constructor()
*/


/*
html#autistiBoxes.constructor()
*/

function abBuilder(){

	ab.innerHTML += `<label for="${nomecognome(autistaArr[i])}_note"> ${autistaArr[i]} </label>`;


	for(q=0;q<lenQual;q++){

		ab.innerHTML += '<div class="radioGridContainer">';
			ab.innerHTML += `<div>${qualitbArr[q]} ${(q+1)}</div>`;
			ab.innerHTML += `<label for="${qualitaArr[q]}"></label>`;
			ab.innerHTML += `<input type="radio" class="radioBtn" id="${nomecognome(autistaArr[i])}_${qualitaArr[q]}" name="${nomecognome(autistaArr[i])}_qualita" value="${qualitaArr[q]}" />`;
		ab.innerHTML += '</div><br />';
	};

	ab.innerHTML += `<textarea id="${nomecognome(autistaArr[i])}_note" name="commenti" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea><hr>`;

};


/*
endOf.abBiilder()
*/




for(i=0;i<lenAut;i++){
	abBuilder();
};



