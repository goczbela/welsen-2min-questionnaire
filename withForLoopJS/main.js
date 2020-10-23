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

var ab = document.getElementById("autistiBox");


var i = 0;
var q = 0;



/*
html#autistiBoxes.constructor()
*/

function abBuilder(){

		// selection of #autistiBox
		let autistiBox = document.getElementById("autistiBox");

		// create autistaBox
		let autistaBox_DIV = document.createElement("DIV");
		autistaBox_DIV.setAttribute("id", `autista_${nomecognome(autistaArr[i])}`);
		autistaBox_DIV.setAttribute("class", "autistaBox");
		autistiBox.appendChild(autistaBox_DIV);

		// create autistaLabel
		let autistaLabel = document.createElement("LABEL");
		autistaLabel.setAttribute("class", "autistaLabel");
		autistaLabel.setAttribute("for", `${nomecognome(autistaArr[i])}_note`);
		autistaLabel.innerHTML = autistaArr[i];
		autistaBox_DIV.appendChild(autistaLabel);

		// create img for autista
		let autista_IMG = document.createElement("IMG");
		autista_IMG.setAttribute("src", `img/${nomecognome(autistaArr[i])}.jpg`);
		autistaBox_DIV.appendChild(autista_IMG);

		// create div.radioGridContainer for radiobuttons
		let radioGridContainer = document.createElement("DIV");
		radioGridContainer.setAttribute("class", "radioGridContainer");
		autistaBox_DIV.appendChild(radioGridContainer);


				// create 5 radioButtons & signsOfSmiles with names for sending data
				for(q=0;q<lenQual;q++){

					let radioGridContents = document.createElement("DIV");
					radioGridContainer.appendChild(radioGridContents);

						let qualitbDiv = document.createElement("DIV");
						qualitbDiv.innerHTML = `${qualitbArr[q]}`;
						radioGridContents.appendChild(qualitbDiv);

						let qualitaRadio = document.createElement("INPUT");
						qualitaRadio.setAttribute("type", "radio");
						qualitaRadio.setAttribute("class", "radioBtn");
						qualitaRadio.setAttribute("id", `${nomecognome(autistaArr[i])}_${qualitaArr[q]}`);
						qualitaRadio.setAttribute("name", `${nomecognome(autistaArr[i])}_qualita`);
						qualitaRadio.value = `${qualitaArr[q]}`;
						radioGridContents.appendChild(qualitaRadio);

						let numQualita = document.createElement("DIV");
						numQualita.setAttribute("class", "numQualita");
						numQualita.innerHTML = `${(q+1)}`;
						radioGridContents.appendChild(numQualita);
				
				};

		// create br
		let br = document.createElement("BR");
		autistaBox_DIV.appendChild(br);

		// create textarea for autista
		let autistaTextarea = document.createElement("TEXTAREA");
		autistaTextarea.setAttribute("id", `${nomecognome(autistaArr[i])}_note`);
		autistaTextarea.setAttribute("class", "note");
		autistaTextarea.setAttribute("name", `${nomecognome(autistaArr[i])}_note`);
		autistaTextarea.setAttribute("value", "");
		autistaTextarea.setAttribute("rows", "5");
		autistaTextarea.setAttribute("cols", "20");
		autistaTextarea.setAttribute("placeholder", "tuoi commenti sul nostro autista");
		autistaBox_DIV.appendChild(autistaTextarea);

};



for(i=0;i<lenAut;i++){
	abBuilder();
};
