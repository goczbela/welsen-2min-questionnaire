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

<!-- Autista Boxes made by JavaScript (main.js) -->

			<div id="autistiBox">

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

		<script src="main.js"></script>

</body>
</html>