<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">

<?php

//CONTROLLO SESSIONE ATTIVA
include 'SessioneAttiva.php';
    if (!$User = SessioneAttiva()) {
        header('Location: Login.php');
        exit;
    }

//POSTO NUOVO COMMENTO
    if(!empty($_POST['commento']) && $_POST['commento'] != $commento){
        $connessione = mysqli_connect("localhost: 3307", "root", "", "HW1") or die(mysqli_error($connessione));
        $calendario = date ('Y-m-d');
        $commento = mysqli_real_escape_string($connessione, $_POST['commento']);

        $query = "INSERT into Commenti(Giorno, Username, Commento) values ('$calendario', '$User', '$commento')";
        $risposta = mysqli_query($connessione, $query) or die(mysqli_error($connessione));
        mysqli_close($connessione);
    }

?>

<!DOCTYPE html>
<html>
 <head>
 <meta charset = "utf-8">
 <title>Homepage</title>
 <link rel="stylesheet" href="Homepage.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="Homepage.js" defer="true"></script>
</head>

<input type = "hidden" id = "User" value = "<?php echo $User?>">

 <body>

    <nav>
        <img src = "Icone/Home.png"/>
        <a href= "Homepage.php">Home</a>
        <img src = "Icone/Lettera.png"/>
        <a href= "https://www.facebook.com/groups/265209058839">Contattaci</a>
        <img src = "Icone/Porta.png"/>
        <a class= "LOGOUT" href= "Logout.php">Logout</a>
    </nav>

    <header>
        <img id = "Head-img" src = "Icone/Immagine-Header.png"/>
        <h1 class = "Titolo">Blue Sky: il Blog</h1>
    </header>

    <section class = "Intro">
        <img src = "Icone/Pergamena.png"/>
        <p id = "Introduzione"> 
            <em>Ciao, 
                <?php echo $User?>
                ! <br/>
            Questo è il blog ufficiale del libro "Blue Sky e il Risveglio della Magia Pura."<br/>
            Cosa aspetti? Clicca sotto una delle immagini che vedi,
            il tuo viaggio nel Mondo dell'Apparenza è appena iniziato!</em></p>
    </section>

    <article> 
        <section class = "Riquadri">
            <div>
                <img src="Icone/Personaggi.png"/>
                <a href= "Personaggi.php"><em>Personaggi</em></a>
            </div>
            <div>
                <img src="Icone/Trama.png"/>
                <a href= "https://www.libriconsigliati.com/esordienti/blue-sky-e-il-risveglio-della-magia-pura/"><em>Trama</em></a>
            </div>
            <div>
                <img src = "Icone/Video.png"/>
                <a href= "Video.php"><em>Trailer</em></a>
            </div>
        </section>
        
        <section class = "Riquadri">
            <div>
                <img src="Icone/Autori.png"/>
                <a href= "Autori.php"><em>Gli autori</em></a>
            </div>
            <div>
                <img src="Icone/Interviste.png"/>
                <a href= "https://youtu.be/_r2guTl9dgs?feature=shared"><em>Interviste</em></a>
            </div>
            <div>
                <img src = "Icone/Migoli.png"/>
                <a href= "Missione.php"><em>Missione</em></a>
            </div>
        </section> 
    </article>

    <form method = "post" class = "SezCommenti">
        <div id = "Domanda">Ti è piaciuto il libro? Lascia un commento!</div>
        <input type= "text" id = "testo" name = "commento">
        <input type= "submit" id = "invio" value = "Invia commento">
    </form>

    <section class = "SezCommenti" id = "Nosfondo">
        <div id = "Domanda2">Non trovi un commento? Cerca il nome utente</div>
        <input type= "text" id = "Filtra" name = "Filtra">
        <input type= "button" id = "Conferma" value = "Cerca utente">
    </section>

    <footer>
        <img src="Icone/Piuma.png"/>
        <p>Pubblicato il: 01/11/2023</p>
    </footer>

 </body>
</html>