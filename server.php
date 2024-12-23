<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Chiavi reCAPTCHA
    $secretKey = "6LcgPqMqAAAAALTyt1xko0a7QWLGAPi3qUSJ0FCZ";
    $captchaResponse = $_POST['g-recaptcha-response'] ?? '';
    $remoteIp = $_SERVER['REMOTE_ADDR'];

    // Verifica che il campo reCAPTCHA sia stato inviato
    if (empty($captchaResponse)) {
        header('Location: home?error=reCaptcha#contact');
    }

    // URL di verifica reCAPTCHA
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";

    // Invio richiesta a Google
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $verifyUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $secretKey,
        'response' => $captchaResponse,
        'remoteip' => $remoteIp,
    ]));

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo "Errore cURL: " . curl_error($ch);
        curl_close($ch);
        exit;
    }
    curl_close($ch);

    // Decodifica della risposta
    $responseKeys = json_decode($response, true);

    // Verifica se la risposta è valida
    if ($responseKeys["success"]) {
        // Recupera i dati del form
        $impresa = $_POST["impr"] ?? 'Non specificato';
        $cod_fisc = $_POST["cf"] ?? 'Non specificato';
        $provincia = $_POST["prov"] ?? 'Non specificato';
        $email = $_POST["mail"] ?? 'Non specificato';
        $telefono = $_POST["tel"] ?? 'Non specificato';
        $richiesta = $_POST["richiesta"] ?? 'Non specificato';
        $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING) ?? 'Non specificato';

        // Costruisci il messaggio email
        $msg = "Impresa: $impresa\nCodice Fiscale: $cod_fisc\nProvincia: $provincia\nEmail: $email\nTelefono: $telefono\nServizio: $service\nRichiesta: $richiesta";
        $msg = wordwrap($msg, 70);

        // Impostazioni email (info@mondocertificazioni.com)
        $to = "info@mondocertificazioni.com";
        $subject = "Richiesta Consulenza";
        $headers = "From: postmaster@mondocertificazioni.com\r\n";

        // Invia l'email
        if (mail($to, $subject, $msg, $headers)) {
           header('Location: confirm-email');
        } else {
            header('Location: home?error=email_failed#contact');
        }
    } else {
        if (!empty($responseKeys['error-codes'])) {
            foreach ($responseKeys['error-codes'] as $error) {
                echo "Codice errore: $error<br>";
            }
        } else {
            header('Location: home?error=reCaptcha#contact');
        }
    }
} else {
    header('Location: home?error=reCaptcha#contact');
}
?>