<!doctype html>
<html lang="it">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" 	content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" 	href="main.css" />
	<title>Welsen 2-min Questionario
	</title>
</head>

<body>
	<div id="welsenlogo">
	<img src="./img/welsenlogo.jpg" alt="Welsen Viaggi" />
	</div>
	<div id="wrapperIni">

		<header>
	
			<h1>Welsen 2-min Questionario<br />
			<span>(qualità dei nostro autisti e servizi di Welsen)</span>
			</h1>
	
		</header>
	
	
<!-- Inizial Form -->

		<form id="formQ" action="emailFormSender.php" method="POST" autocomplete="off" spellcheck="false">
	
			<section class="intro">
				
				<h2>
				Per favore aiutate il nostro lavoro valutando il lavoro dei nostri colleghi (solo due minuti)
				</h2>
	
				<p>Se si desidera inviare i dati in modo anonimo: <br />
					non inserire il proprio indirizzo e-mail <br />
					ne anche tuo numero di telefono
				</p>
	
			</section>

<!-- Anonim or Noanonim -->

			<div id="noanonim">
				<div>
					<label for="clientEmail">tuo email indirizzo:</label>
					<input id="clientEmail" name="clientEmail" type="email" placeholder="nome@domain.ch" />
					<label for="clientTel">tuo numero di telefono:</label>
					<input id="clientTel" name="clientTel" type="tel" placeholder="00 41 78 123 4567" />
				</div>
			</div>
			<hr />
			
	</div>

<!-- Autista Boxes -->

			<div id="autistiBox">
	
				<div id="autista_ammaromar" class="autistaBox">
					<label class="autistaLabel" for=ammaromar_note>Ammar Omar</label>
					<img src="img/ammaromar.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="ammaromar_moltoMale" name="ammaromar_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="ammaromar_male" name="ammaromar_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="ammaromar_solito" name="ammaromar_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="ammaromar_buono" name="ammaromar_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="ammaromar_moltoBuono" name="ammaromar_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="ammaromar_note" class="note" name="ammaromar_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_belagocz" class="autistaBox">
					<label class="autistaLabel" for=belagocz_note>Bela Gocz</label>
					<img src="img/belagocz.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="belagocz_moltoMale" name="belagocz_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="belagocz_male" name="belagocz_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="belagocz_solito" name="belagocz_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="belagocz_buono" name="belagocz_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="belagocz_moltoBuono" name="belagocz_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="belagocz_note" class="note" name="belagocz_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_chiarasoldini" class="autistaBox">
					<label class="autistaLabel" for=chiarasoldini_note>Chiara Soldini</label>
					<img src="img/chiarasoldini.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="chiarasoldini_moltoMale" name="chiarasoldini_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="chiarasoldini_male" name="chiarasoldini_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="chiarasoldini_solito" name="chiarasoldini_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="chiarasoldini_buono" name="chiarasoldini_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="chiarasoldini_moltoBuono" name="chiarasoldini_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="chiarasoldini_note" class="note" name="chiarasoldini_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_claudiacurcuruto" class="autistaBox">
					<label class="autistaLabel" for=claudiacurcuruto_note>Claudia Curcuruto</label>
					<img src="img/claudiacurcuruto.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="claudiacurcuruto_moltoMale" name="claudiacurcuruto_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="claudiacurcuruto_male" name="claudiacurcuruto_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="claudiacurcuruto_solito" name="claudiacurcuruto_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="claudiacurcuruto_buono" name="claudiacurcuruto_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="claudiacurcuruto_moltoBuono" name="claudiacurcuruto_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="claudiacurcuruto_note" class="note" name="claudiacurcuruto_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_elisabettacavani" class="autistaBox">
					<label class="autistaLabel" for=elisabettacavani_note>Elisabetta Cavani</label>
					<img src="img/elisabettacavani.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="elisabettacavani_moltoMale" name="elisabettacavani_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="elisabettacavani_male" name="elisabettacavani_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="elisabettacavani_solito" name="elisabettacavani_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="elisabettacavani_buono" name="elisabettacavani_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="elisabettacavani_moltoBuono" name="elisabettacavani_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="elisabettacavani_note" class="note" name="elisabettacavani_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_enricolacci" class="autistaBox">
					<label class="autistaLabel" for=enricolacci_note>Enrico Lacci</label>
					<img src="img/enricolacci.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="enricolacci_moltoMale" name="enricolacci_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="enricolacci_male" name="enricolacci_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="enricolacci_solito" name="enricolacci_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="enricolacci_buono" name="enricolacci_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="enricolacci_moltoBuono" name="enricolacci_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="enricolacci_note" class="note" name="enricolacci_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_filippogelao" class="autistaBox">
					<label class="autistaLabel" for=filippogelao_note>Filippo Gelao</label>
					<img src="img/filippogelao.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="filippogelao_moltoMale" name="filippogelao_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="filippogelao_male" name="filippogelao_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="filippogelao_solito" name="filippogelao_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="filippogelao_buono" name="filippogelao_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="filippogelao_moltoBuono" name="filippogelao_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="filippogelao_note" class="note" name="filippogelao_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_francescoascione" class="autistaBox">
					<label class="autistaLabel" for=francescoascione_note>Francesco Ascione</label>
					<img src="img/francescoascione.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="francescoascione_moltoMale" name="francescoascione_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="francescoascione_male" name="francescoascione_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="francescoascione_solito" name="francescoascione_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="francescoascione_buono" name="francescoascione_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="francescoascione_moltoBuono" name="francescoascione_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="francescoascione_note" class="note" name="francescoascione_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_lucavedovato" class="autistaBox">
					<label class="autistaLabel" for=lucavedovato_note>Luca Vedovato</label>
					<img src="img/lucavedovato.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="lucavedovato_moltoMale" name="lucavedovato_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="lucavedovato_male" name="lucavedovato_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="lucavedovato_solito" name="lucavedovato_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="lucavedovato_buono" name="lucavedovato_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="lucavedovato_moltoBuono" name="lucavedovato_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="lucavedovato_note" class="note" name="lucavedovato_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_manuelenegri" class="autistaBox">
					<label class="autistaLabel" for=manuelenegri_note>Manuele Negri</label>
					<img src="img/manuelenegri.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="manuelenegri_moltoMale" name="manuelenegri_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="manuelenegri_male" name="manuelenegri_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="manuelenegri_solito" name="manuelenegri_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="manuelenegri_buono" name="manuelenegri_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="manuelenegri_moltoBuono" name="manuelenegri_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="manuelenegri_note" class="note" name="manuelenegri_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_roccocirrone" class="autistaBox">
					<label class="autistaLabel" for=roccocirrone_note>Rocco Cirrone</label>
					<img src="img/roccocirrone.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="roccocirrone_moltoMale" name="roccocirrone_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="roccocirrone_male" name="roccocirrone_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="roccocirrone_solito" name="roccocirrone_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="roccocirrone_buono" name="roccocirrone_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="roccocirrone_moltoBuono" name="roccocirrone_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="roccocirrone_note" class="note" name="roccocirrone_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_sergiointerlandi" class="autistaBox">
					<label class="autistaLabel" for=sergiointerlandi_note>Sergio Interlandi</label>
					<img src="img/sergiointerlandi.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="sergiointerlandi_moltoMale" name="sergiointerlandi_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="sergiointerlandi_male" name="sergiointerlandi_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="sergiointerlandi_solito" name="sergiointerlandi_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="sergiointerlandi_buono" name="sergiointerlandi_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="sergiointerlandi_moltoBuono" name="sergiointerlandi_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="sergiointerlandi_note" class="note" name="sergiointerlandi_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
	
	
				<div id="autista_stefanojelec" class="autistaBox">
					<label class="autistaLabel" for=stefanojelec_note>Stefano Jelec</label>
					<img src="img/stefanojelec.jpg" />
					<div class="radioGridContainer">
						<div>
							<div>:-((</div>
							<input type="radio" class="radioBtn" id="stefanojelec_moltoMale" name="stefanojelec_qualita" value="moltoMale" />
							<div class="numQualita">1</div>
						</div>
						<div>
							<div>:-(</div>
							<input type="radio" class="radioBtn" id="stefanojelec_male" name="stefanojelec_qualita" value="male" />
							<div class="numQualita">2</div>
						</div>
						<div>
							<div>:-||</div>
							<input type="radio" class="radioBtn" id="stefanojelec_solito" name="stefanojelec_qualita" value="solito" />
							<div class="numQualita">3</div>
						</div>
						<div>
							<div>:-)</div>
							<input type="radio" class="radioBtn" id="stefanojelec_buono" name="stefanojelec_qualita" value="buono" />
							<div class="numQualita">4</div>
						</div>
						<div>
							<div>;-))</div>
							<input type="radio" class="radioBtn" id="stefanojelec_moltoBuono" name="stefanojelec_qualita" value="moltoBuono" />
							<div class="numQualita">5</div>
						</div>
					</div>
					<br />
					
					<textarea id="stefanojelec_note" class="note" name="stefanojelec_note" value="" rows="5" cols="20" placeholder="tuoi commenti sul nostro autista"></textarea>
				</div>
			</div>

<!-- Note about Welsen Viaggi -->
	
			<div id="welsen_note_wrapper">

				<hr />
	
				<label for="welsen_note">ALTRI COMMENTI:</label><br />
				<textarea id="welsen_note" class="note" name="welsen_note" value="" rows="5" cols="20" placeholder="altri tuoi commenti sul nostro servizio? o tu hai qualche altre idea?"></textarea>
	

	
				<hr />	
	
				<input id="submit" type="submit" value="invia" />
			
				<input id="clientip" name="clientip" type="text" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
			
			</div>
		
		</form>



</body>
</html>