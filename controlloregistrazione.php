<html>
    <head><title>Registrazione</title>
        <link href="notifica.css" rel="stylesheet" type="text/css"> </head>
        <body>
            <div class="wrapper">
                <h1>
<?php
if(isset($_REQUEST['nomeutente'])) $nomeutente=$_REQUEST["nomeutente"]; 
else die("Accesso non consentito");
if(isset($_REQUEST['password'])) $password=$_REQUEST["password"];
else die("Accesso non consentito");
if(isset($_REQUEST['email'])) $email=$_REQUEST["email"];
else die("Accesso non consentito");

$conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
 
$query = "SELECT * FROM utente where nomeutente='$nomeutente'";
$query2 = "SELECT * FROM utente where email='$email'";
$risultato = mysqli_query ($conn, $query);
$risultato2 = mysqli_query ($conn, $query2);
if(mysqli_num_rows($risultato)==0){
    if(mysqli_num_rows($risultato2)==0){
    echo "email: ";
    echo $email;
    echo "<br/>nome utente: ";
    echo $nomeutente;
    echo "<br />password: ";
    echo $password;
    echo "<form action=\"nuovoutente.php\">";
    echo "<input type=\"hidden\" value=\"$nomeutente\" name=\"nomeutente\">";
    echo "<input type=\"hidden\" value=\"$password\" name=\"password\">";
    echo "<input type=\"hidden\" value=\"$email\" name=\"email\">";
    echo "<input type=\"submit\" value=\"Conferma la registrazione\">";
    echo "</form>";
}else{echo "Questa email è gi&agrave; associata ad un account.</br>";
    echo "<form action=\"registrati.php\">";
    echo "<input type=\"submit\" value=\"Torna alla pagina di registrazione\">";
    echo "</form>";}
}else{
    echo "Nome utente non disponibile.</br>";
    echo "<form action=\"registrati.php\">";
    echo "<input type=\"submit\" value=\"Torna alla pagina di registrazione\">";
    echo "</form>";
    }
    ?>
    </h1>
    </div>
    </body>
    </html>