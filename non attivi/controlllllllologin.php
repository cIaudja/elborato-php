<?php
$conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
$nomeutente = $_GET["nomeutente"]; 
$password = $_GET["password"];
    

    if (empty($username) or empty($password)) {
        echo "Inserisci username e password";
    } else {
        $query = "SELECT * FROM utente where nomeutente=$nomeutente and password='$password'";
        echo $query;
    
}
?>