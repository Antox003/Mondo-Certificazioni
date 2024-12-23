<?php

    if($_GET['error'] === 'email_failed'){
        echo "
        <script>
            alert('Errore: Non è stato possibile inviare l\'email.');
            window.location.href = 'home#contact';
        </script>";
    } elseif($_GET['error'] === 'reCaptcha'){
        echo "
        <script>
            alert('Errore: reCaptcha non verificato');
            window.location.href = 'home#contact';
        </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scopri i nostri servizi per la gestione e il conseguimento di certificazioni aziendali. Mondo Certificazioni ti guida passo dopo passo nel miglioramento dei sistemi di gestione, per ottenere certificazioni ISO e garantire la qualità e la sicurezza della tua impresa. Affidati agli esperti del settore!">
    <meta name="google-site-verification" content="UcBfsREwZO3euaAdJcxxSpAq-5zEM6VVTlcO0qsunuM"/>
    <title>Mondo Certificazioni</title>
    <link rel="stylesheet" href="style/style-home.css">
    <link rel="icon" href="./img/globe.png" type="image/png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<header>
    <div class="container-header">
        <div class="container-title">
            <h2 class="regular">Mondo</h2>
            <img src="./img/globe_logo.svg" alt="">
            <h2>Certificazioni</h2>
        </div>
        <nav>
            <button>
                <a href="#contact">Contatti</a>
            </button>
        </nav>
    </div>
</header>

<section class="home">
    <div class="container-title">
        <div class="title">
            <h4>Consulenti per Professione...</h4>
        <h4>Ottimizzatori per vocazione</h4>
        </div>
        <br>
        <br>
        <button>
            <a href="#servizi">Prova la differenza</a>
        </button>
        <img src="./img/arrow.png" alt="">
    </div>
    <div class="container-animation">
        <div class="planetPosition">
            <div class="far-orbit"></div>
            <div class="near-orbit"></div>
            <div class="mainPlanet">
                <div class="smallPlanet one">
                    <img src="./img/certificate1.png" alt="certificate">
                </div>
                <div class="smallPlanet two">
                    <img src="./img/certificate2.png" alt="certificate">
                </div>
                <div class="smallPlanet three">
                    <img src="./img/certificate3.png" alt="certificate">
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="service">
    <div class="service-title">
        <a name="servizi"><h1>I nostri Servizi</h1></a>
    </div>
    <br>
    <div class="container-card">
            <div class="card">
                <div class="imgbox">
                    <img src="./img/attestazione-SOA.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Attestazione SOA</h2>
                    <p>L’Attestazione SOA abilita le imprese a partecipare a gare di appalto aventi ad oggetto l’esecuzione di lavori pubblici di importo superiore a 150.000 euro.</p>
                    <a href="attestazione-soa">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/gestione.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Sistemi di Gestione</h2>
                    <p>Un sistema di gestione è un insieme di regole e procedure, definito in una norma riconosciuta a livello internazionale, che un'organizzazione o azienda può applicare allo scopo di raggiungere obiettivi definiti.</p>
                    <a href="sistemi-di-gestione">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/csr.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Responsabilità Sociale</h2>
                    <p>La responsabilità sociale d'impresa o CSR, comprende tutte quelle attività realizzate da imprese per affrontare in maniera attiva problematiche d'impatto sociale ed etico sia verso i propri dipendenti, sia verso la comunità esterna.</p>
                    <a href="responsabilita-sociale">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/sicurezza.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Sicurezza sul Lavoro</h2>
                    <p>La Sicurezza sul lavoro comprende l'insieme delle azioni interne ed esterne all'azienda, mirate a garantire l'incolumità dei lavoratori e del personale presente</p>
                    <a href="sicurezza-sul-lavoro">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/formazione.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Formazione</h2>
                    <p>Per Formazione Professionale si intende il percorso di formazione specifica che si deve intraprendere per accostarsi a una professione e per essere pronti ad entrare (o rientrare) nel mondo o mercato del lavoro.</p>
                    <a href="formazione">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/medicina.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Medicina del Lavoro</h2>
                    <p>La medicina del lavoro è quella branca della medicina che si occupa della prevenzione, della diagnosi e della cura delle malattie causate dalle attività lavorative.</p>
                    <a href="medicina-del-lavoro">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/appalto.jpg" alt="">
                </div>
                <div class="content">
                    <h2>Gare d'Appalto</h2>
                    <p>Offriamo un servizio di supporto per Gare d'appalto relative a Lavori, Servizi e Forniture, sia Tradizionali che Telematiche</p>
                    <a href="gare-appalto">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/avvalimento.png" alt="">
                </div>
                <div class="content">
                    <h2>Avvalimenti</h2>
                    <p>Un operatore economico che partecipa ad una procedura di gara per l'affidamento di un appalto pubblico, per il quale è richiesto il possesso di determinati requisiti, può dichiarare di avvalersi dei requisiti di un altro operatore economico.</p>
                    <a href="avvalimenti">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/emas.png" alt="">
                </div>
                <div class="content">
                    <h2>Registrazione Emas</h2>
                    <p>La registrazione EMAS è uno strumento volontario di certificazione ambientale rivolto ad aziende ed enti pubblici, per la valutazione, la relazione e il miglioramento delle prestazioni ambientali.</p>
                    <a href="registrazione-emas">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/ecovadis.png" alt="">
                </div>
                <div class="content">
                    <h2>Valutazione Eco Vadis</h2>
                    <p>La valutazione di sostenibilità EcoVadis® è un servizio a pagamento che permette di ottenere un rating della vostra azienda in termini di sostenibilità della Catena di Fornitura.</p>
                    <a href="valutazione-eco-vadis">Scopri di più</a>
                </div>
            </div>

            <div class="card">
                <div class="imgbox">
                    <img src="./img/dlgs.png" alt="">
                </div>
                <div class="content">
                    <h2>D.LGS 231/2001</h2>
                    <p>Il D.Lgs. 231/01 istituisce la responsabilità amministrativa dell’Organizzazione per reati posti in essere da Amministratori, Dirigenti e/o Dipendenti nell’interesse o a vantaggio dell’Organizzazione stessa.</p>
                    <a href="dlgs-231-2001">Scopri di più</a>
                </div>
            </div>
    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<a name="contact"></a>
<section class="contact">
    <div class="form-contact">
        <br>
        <h3>CONTATTI</h3>
        <br>
        <br>
        <form action="./server.php" method="post">
            <div class="group">
                <div class="impresa">
                    <label for="impr">IMPRESA*</label>
                    <br>
                    <input type="text" id="impr" name="impr" required>
                </div>

                <div class="cod-fisc">
                    <label for="cf">CODICE FISCALE*</label>
                    <br>
                    <input type="text" id="cf" name="cf" required>
                </div>
            </div>
            <div class="group">
                <div class="provincia">
                    <label for="prov">PROVINCIA*</label>
                    <br>
                    <input type="text" id="prov" name="prov" required>
                </div>

                <div class="email">
                    <label for="mail">EMAIL*</label>
                    <br>
                    <input type="text" id="mail" name="mail" required>
                </div>
            </div>
            <div class="group">
                <div class="telefono">
                    <label for="tel">TELEFONO*</label>
                    <br>
                    <input type="text" id="tel" name="tel" required>
                </div>
                <div class="telefono">
                    <label for="choose">SERVIZIO</label>
                    <br>
                    <select name="service" id="service">
                        <option value="none" id="" selected disabled></option>
                        <option value="Attestazione SOA">Attestazione SOA</option>
                        <option value="Sistemi di gestione">Sistemi di gestione</option>
                        <option value="Responsabilità Sociale">Responsabilità Sociale</option>
                        <option value="Sicurezza sul lavoro">Sicurezza sul lavoro</option>
                        <option value="Formazione">Formazione</option>
                        <option value="Medicina del lavoro">Medicina del lavoro</option>
                        <option value="Gare Appalto">Gare D'Appalto</option>
                        <option value="Avvalimenti">Avvalimenti</option>
                        <option value="Registrazione EMAS">Registrazione EMAS</option>
                        <option value="Valutazione ECO VADIS">Valutazione ECO VADIS</option>
                        <option value="D.LGS 231/2001">D.LGS 231/2001</option>
                    </select>
                </div>
            </div>

            <div class="request">
                <div class="request-name">
                    <br>
                    <label for="richiesta">RICHIESTA</label>
                </div>
                <div class="msg">
                    <textarea id="richiesta" name="richiesta" placeholder=" Inserisci qui la tua richiesta"></textarea> 
                </div>
            </div>

            <div class="policy">
                <p><input type="checkbox" name="" class="checkbox" required> Selezionando questa casella acconsenti al trattamento dei tuoi dati secondo la <a href="./doc/Policy_trattamento_dati.pdf" target="_blank">Privacy policy</a></p>
            </div>

            <div class="obligatory">
                <p>NOTA: I campi contrassegnati con * sono obbligatori</p>
            </div>

            <div class="submit-request">
                <div class="container-captcha">
                    <div class="g-recaptcha" data-sitekey="6LcgPqMqAAAAAOw-R8UH0pr1MrfWE8mfBKQdLOLA"></div>
                </div>
                <input type="submit" id="submit" value="Invia Richiesta">
            </div>
        </form>
    </div>
</section>
</body>
</html>

<?php
    include 'fragments/footer.php'
?>