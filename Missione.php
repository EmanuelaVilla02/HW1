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
?>

<!DOCTYPE html>
<html>
 <head>
 <meta charset = "utf-8">
 <title>Missione</title>
 <link rel="stylesheet" href="Missione.css" />
 <script src="Missione.js" defer></script>
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
        <p id = "Titolo"> La nostra missione</p>
    </header>

    <article> 
         <p id = "Messaggio"><em>Clicca sulla pergamena per aprirla...</em></p>
         <img id = "Pergamena" src = "Icone/Pergamena 3A.png"/> 
         <p id = "Testo" class = "hidden">
            L'intero ricavato è interamente devoluto ai bambini dei villaggi della Tanzania.
             Un ringraziamento speciale va a te lettore, <?php echo $User?>, che hai comprato questo libro:
             tu e Metello siete degli eroi per i bambini della Tanzania. 
             Grazie di cuore!"<br/>- Grace e Joe</p>
    </article>

    <footer>
        <img src="Icone/Piuma.png"/>
        <p>Pubblicato il: 01/11/2023</p>
    </footer>

 </body>
</html>