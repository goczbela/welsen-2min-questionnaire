

<?php

#client Email & Tel

    $clientEmail = $_POST['clientEmail'];
    $clientTel = $_POST['clientTel'];

/* ---- AUTISTI DATES ---- */

# Ammar Omar

    $ammaromar_qualita = $_POST['ammaromar_qualita'];
    $ammaromar_note = nl2br($_POST['ammaromar_note']);

# Bela Gocz

$belagocz_qualita = $_POST['belagocz_qualita'];
$belagocz_note = nl2br($_POST['belagocz_note']);

# Chiara Soldini

$chiarasoldini_qualita = $_POST['chiarasoldini_qualita'];
$chiarasoldini_note = nl2br($_POST['chiarasoldini_note']);

# Claudia Curcuruto

$claudiacurcuruto_qualita = $_POST['claudiacurcuruto_qualita'];
$claudiacurcuruto_note = nl2br($_POST['claudiacurcuruto_note']);

# Elisabetta Cavani

$elisabettacavani_qualita = $_POST['elisabettacavani_qualita'];
$elisabettacavani_note = nl2br($_POST['elisabettacavani_note']);

# Enrico Lacci

$enricolacci_qualita = $_POST['enricolacci_qualita'];
$enricolacci_note = nl2br($_POST['enricolacci_note']);

# Filippo Gelao

$filippogelao_qualita = $_POST['filippogelao_qualita'];
$filippogelao_note = nl2br($_POST['filippogelao_note']);

# Francesco Ascione

$francescoascione_qualita = $_POST['francescoascione_qualita'];
$francescoascione_note = nl2br($_POST['francescoascione_note']);

# Luca Vedovato

$lucavedovato_qualita = $_POST['lucavedovato_qualita'];
$lucavedovato_note = nl2br($_POST['lucavedovato_note']);

# Manuele Negri

$manuelenegri_qualita = $_POST['manuelenegri_qualita'];
$manuelenegri_note = nl2br($_POST['manuelenegri_note']);

# Rocco Cirrone

$roccocirrone_qualita = $_POST['roccocirrone_qualita'];
$roccocirrone_note = nl2br($_POST['roccocirrone_note']);

# Sergio Interlandi

$sergiointerlandi_qualita = $_POST['sergiointerlandi_qualita'];
$sergiointerlandi_note = nl2br($_POST['sergiointerlandi_note']);

# Stefano Jelec

$stefanojelec_qualita = $_POST['stefanojelec_qualita'];
$stefanojelec_note = nl2br($_POST['stefanojelec_note']);


/* ---- END OF AUTISTI DATES ---- */

# Note for Welsen Viaggi

    $welsen_note = nl2br($_POST['welsen_note']);

# Client' IP address

    $clientip = $_POST['clientip'];


/* ------------------------------------- */
/* ---- COMPOSING THE EMAIL MESSAGE ---- */


    $email_from = "welsen@bustransportsystem.ch";

    $email_subject = "Nuovo form da $clientip IP address (questinario scolastico 2019-2020)";

    $email_body =   "Nuovo messaggio da: <br />".
                    "Email: $clientEmail <br />".
                    "Tel: $clientTel <br />".
                    "(o annonimo)<br /><br /><br />".

                    "Qualità dei Autisti della Welsen:<br /><br />".

                    "Ammar Omar<br /><br />".
                    "Qualità: $ammaromar_qualita<br /><br />".
                    "Note: <br />".
                    "$ammaromar_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Bela Gocz<br /><br />".
                    "Qualità: $belagocz_qualita<br /><br />".
                    "Note: <br />".
                    "$belagocz_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Chiara Soldini<br /><br />".
                    "Qualità: $chiarasoldini_qualita<br /><br />".
                    "Note: <br />".
                    "$chiarasoldini_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Claudia Curcuruto<br /><br />".
                    "Qualità: $claudiacurcuruto_qualita<br /><br />".
                    "Note: <br />".
                    "$claudiacurcuruto_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Elisabetta Cavani<br /><br />".
                    "Qualità: $elisabettacavani_qualita<br /><br />".
                    "Note: <br />".
                    "$elisabettacavani_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Enrico Lacci<br /><br />".
                    "Qualità: $enricolacci_qualita<br /><br />".
                    "Note: <br />".
                    "$enricolacci_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Filippo Gelao<br /><br />".
                    "Qualità: $filippogelao_qualita<br /><br />".
                    "Note: <br />".
                    "$filippogelao_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Francesco Ascione<br /><br />".
                    "Qualità: $francescoascione_qualita<br /><br />".
                    "Note: <br />".
                    "$francescoascione_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Luca Vedovato<br /><br />".
                    "Qualità: $lucavedovato_qualita<br /><br />".
                    "Note: <br />".
                    "$lucavedovato_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Manuele Negri<br /><br />".
                    "Qualità: $manuelenegri_qualita<br /><br />".
                    "Note: <br />".
                    "$manuelenegri_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Rocco Cirrone<br /><br />".
                    "Qualità: $roccocirrone_qualita<br /><br />".
                    "Note: <br />".
                    "$roccocirrone_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Sergio Interlandi<br /><br />".
                    "Qualità: $sergiointerlandi_qualita<br /><br />".
                    "Note: <br />".
                    "$sergiointerlandi_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Stefano Jelec<br /><br />".
                    "Qualità: $stefanojelec_qualita<br /><br />".
                    "Note: <br />".
                    "$stefanojelec_note<br />".
                    "- - - - - - - - - -<br /><br />".

                    "Altri note/idea per Welsen: <br />".
                    "$welsen_note<br />".

                    "- - - - - - - - - - - - - - -<br /><br />".




/* ----------------------------------- */
/* ---- SENDING THE EMAIL MESSAGE ---- */


                $to = "welsen@bustransportsystem.ch";

                $headers = "From: $email_from \r\n";

                $headers .= "Reply-To: $clientEmail \r\n";

                $headers .= "Content-Type: text/html; charset=UTF-8";

                mail($to,$email_subject,$email_body,$headers);



?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 	href="main.css" />
    <style>
        p {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
    <title>Grazie mille!</title>
</head>
<body>
    <p>Grazie mille tuoi aiutati!</p><br /><br />
    <p><a href="http://www.welsen.ch/">Sito di Welsen Viaggi</a><span id="timer"> [7]</span></p>
    <br /><br />
    <p><a href="https://bustransportsystem.ch/welsen-2min-q/">Torna al questionario di Welsen</a></p>

<script>

function timedText() {

let t = 6;
let timer = document.getElementById("timer");

setInterval(function(){
    if (t === 0){
        window.open("http://www.welsen.ch/", "_self");
    } else {
        timer.innerHTML = ` [${t}]`;
        t--;
    }
}, 1000);

}

timedText();




</script>

</body>
</html>



