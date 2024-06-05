
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">


<?php

//CONTROLLO SESSIONE ATTIVA
include 'SessioneAttiva.php';
    if (SessioneAttiva()) {
        header('Location: Homepage.php');
        exit;
    }

//CONTROLLO CAMPI
if(!empty($_POST['User']) && !empty($_POST['Pw'])){
   
    $connessione = mysqli_connect("localhost:3307", "root", "", "HW1") or die ("Errore di connessione server: ".mysqli_error($connessione));
   
    $User = mysqli_real_escape_string($connessione, $_POST['User']);
    $Pw = mysqli_real_escape_string($connessione, $_POST['Pw']);

    $query = "SELECT * FROM Utenti WHERE Username = '$User'";
    
    $risposta = mysqli_query($connessione, $query);

        if(mysqli_num_rows($risposta) > 0){
                $riga= mysqli_fetch_assoc($risposta);
                
                //password_verify($_POST['Pw'], $riga['Pw'])
                if($_POST['Pw'] == $riga['Pw']){
                    $_SESSION['User'] = $_POST['User'];
                    header("Location: Homepage.php");
                    mysqli_free_result($risposta);
                    mysqli_close($connessione);
                    exit;
                }
                $messaggio = "Username o password errati";                
        }
        else{
            $messaggio = "Account non esistente";
        }
}
else if(isset($_POST['User']) || isset($_POST['Pw'])){
    $messaggio = "Compilare entrambi i campi";
}

?>




<!DOCTYPE html>
<html>
 <head>
 <meta charset = "utf-8">
 <title>Login</title>
 <link rel="stylesheet" href="Login.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 
 <body>

    <nav>
        <h1 class = "Titolo">Blue Sky: il Blog</h1>
    </nav>

    <header>
        <div>
        </div>
        <form method = 'post'>
            <p><strong>Accedi</strong></p>
            <label>Nome utente <input type = "text" name = "User"></label>
            <label>Password <input type = "password" name = "Pw"></label>
            <input id = "Login" class = "Invia" type = "submit">
            <a href= "Registrazione.php"><em>Registrati qui!</em></a>
        </form>
    </header>

    <section>
            <?php
            if (isset($messaggio)) {
                echo "<p class='Errore'><em>$messaggio</em></p>";
                }
            ?>
    </section>

 </body>
</html>