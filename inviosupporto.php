<?php
if(isset($_REQUEST['nomeutente'])) $nome=$_REQUEST["nomeutente"]; //se esiste nome prendilo, altrimenti bloccalo
else die("Accesso non consentito");
if(isset($_REQUEST['email'])) $email=$_REQUEST["email"];
else die("Accesso non consentito");
if(isset($_REQUEST['messaggio'])) $msg=$_REQUEST["messaggio"];
else die("Accesso non consentito");

$conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
 
$query="INSERT INTO supporto (nomeutentemsg, emailmsg, msg) values (\"$nome\", \"$email\", \"$msg\")";

$risultato = mysqli_query ($conn, $query) or
die ("Tabella non raggiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
?>
<html>
<head><title>Supporto</title>
<link href="notifica.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
		<h1>
<?php
if(mysqli_affected_rows($conn)){
	echo "Richiesta di supporto inoltrata con successo";
	echo "<form action=\"home.php\">";
    echo "<input type=\"submit\" value=\"torna alla home\">"; 
	echo "</form>";
}else{
	echo "Ops... qualcosa &egrave andato storto";
	echo "<form action=\"supporto.php\">";
    echo "<input type=\"submit\" value=\"torna al supporto\">"; 
	echo "</form>";
	}
mysqli_close($conn);
?>
</h1>
</div>
</body>
</html>