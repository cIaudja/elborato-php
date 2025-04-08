<?php
if(isset($_REQUEST['nomeutente'])) $nome=$_REQUEST["nomeutente"]; //se esiste nome prendilo, altrimenti bloccalo
else die("Accesso non consentito");
if(isset($_REQUEST['password'])) $password=$_REQUEST["password"];
else die("Accesso non consentito");
if(isset($_REQUEST['email'])) $email=$_REQUEST["email"];
else die("Accesso non consentito");
if(isset($_REQUEST['codutente'])) $codutente=$_REQUEST["codutente"];
else die("Accesso non consentito");

$conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or
die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
 
$query="UPDATE utente set nomeutente=\"$nome\", password=\"$password\", email=\"$email\" where codutente=\"$codutente\"";

$risultato = mysqli_query ($conn, $query) or
die ("Tabella non raggiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );

header('Location:utente.php');

mysqli_close($conn);
