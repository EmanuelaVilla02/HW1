<?php

include 'SessioneAttiva.php';
if (!$User = SessioneAttiva()) {
    header('Location: Login.php');
    exit;
}

//CARICO I COMMENTI

$connessione = mysqli_connect("localhost: 3307", "root", "", "HW1") or die(mysqli_error($connessione));
$query = "SELECT * from Commenti ORDER BY Giorno asc";
$risposta = mysqli_query($connessione, $query) or die(mysqli_error($connessione));

$CommentiArray = array();
    while($elem = mysqli_fetch_assoc($risposta)) {
        $CommentiArray[] = array('Giorno' => $elem['Giorno'],
                            'Username' => $elem['Username'],
                            'Commento' => $elem['Commento']);
    }
echo json_encode($CommentiArray);

?>