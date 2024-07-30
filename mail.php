<?php 

if (isset($_POST['g-recaptcha-response'])) {
    $secret = "6LdQ57QpAAAAAEYxA5uP-Xn2Dh213JitLBCtT75P";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = array(
        'secret' => $secret,
        'response' => $response,
        'remoteip' => $remoteip
    );

    // Inizializza cURL
    $ch = curl_init($url);

    // Imposta le opzioni di cURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    // Esegui la richiesta e ottieni la risposta
    $response = curl_exec($ch);

    // Chiudi la risorsa cURL
    curl_close($ch);

    // Decodifica la risposta JSON
    $response = json_decode($response);

    
if ($response->success) {
    $impresa = $_POST["impr"];
    $cod_fisc = $_POST["cf"];
    $provincia = $_POST["prov"];
    $email = $_POST["mail"];
    $telefono = $_POST["tel"];
    $richiesta = $_POST["richiesta"];
    $service=filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $sender = "postmaster@mondocertificazioni.com";
    
    $headers = "From: $sender\n";

    //messaggio
    $msg = "Impresa: $impresa\nCodice Fiscale: $cod_fisc\nProvincia: $provincia\nEmail: $email\nTelefono: $telefono\nServizio: $service\nRichiesta: $richiesta";

    //con wordwrap() la linea non supera i 70 caratteri
    $msg = wordwrap($msg,70);

    //invio email info@mondocertificazioni.com
    mail("info@mondocertificazioni.com","Richiesta Consulenza",$msg, $headers);
} else {
// Handle the error

$message = "reCaptcha non verificato";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondo Certificazioni | Email inviata</title>
    <link rel="stylesheet" href="style_php.css">
    <link rel="short icon" href="./img/globe.png">
</head>
<body>
    <h2>Grazie per averci scelto!</h2>
    <br>
    <h5>Abbiamo ricevuto la tua richiesta, ti risponderemo nel più breve tempo possibile!</h5>
    <div class="container-button">
        <a href="index.html"><button>Torna alla home</button></a>
    </div>
    <br>
    <br>
    <div class="container-image">
    <img src="./img/logo_NO_sfondo.png" alt="">
    </div>
</body>
</html>