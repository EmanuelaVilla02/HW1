<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">


<!DOCTYPE html>
<html>
 <head>
 <meta charset = "utf-8">
 <title>Autori</title>
 <link rel="stylesheet" href="Autori.css" />
 <script src="Autori.js" defer></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
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
        <img src="Icone/Piuma.png"/>
        <h1 id = "Titolo">Gli autori del libro</h1>
    </header>

    <section id = "Galleria">
        <img data-id = 1 src = "Icone/Autori.png"/>
        <img data-id = 2 src = "Icone/Autori 2.jpeg"/>
        <img data-id = 3 src = "Icone/Autori 3.jpg"/>
    </section>

    <section id = Didascalia>
        <div class = "hidden"></div>
    </section>

    <article>
        <section class = "Autore">
            <p class = "Nome">Grace Commoner</p>
            <p class = "Descrizione">
                Grace ha conosciuto Joe nel 2017 e dal comune interesse per il genere fantasy è nata l’idea di scrivere insieme il nuovo libro della saga di Blue Sky.
                Frequenta la facoltà di Ingegneria informatica.
                Oltre alla passione della scrittura, Grace è attiva nell’ambito dei giochi di ruolo e collabora alla realizzazione di eventi come l’Etnacomics.
            </p>
        </section>
        <section class = "Autore">
            <p class = "Nome">Joe Commoner</p>
            <p class = "Descrizione">
                Joe ha esordito nel 2005 con la fiaba "Blue Sky e l’ingannevole Mondo dell’Apparenza".
                Il ricavato della vendita è stato devoluto in beneficenza ai bambini di Migoli (Tanzania), dove Joe ha vissuto due esperienze che hanno segnato in modo indelebile la sua vita.
                La sua missione continua con la stesura di questo libro, grazie al prezioso contributo di Grace.
            </p>
        </section>
    </article>

    <footer>
        <img src="Icone/Piuma.png"/>
        <p>Pubblicato il: 01/11/2023</p>
    </footer>

 </body>
</html>