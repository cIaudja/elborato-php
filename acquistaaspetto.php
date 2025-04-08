<html>
    <head><title>Aspetto</title>
</head>
<body>
    <?php 
    include ("menu.php");
    echo "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
      $monete=$_GET["monete"];
      $prezzo=$_GET["prezzo"];
      $nomeutente=$_GET["nomeutente"];
      $password=$_GET["password"];
      $email=$_GET["email"];
      $codutente=$_GET["codutente"];
      $codskin=$_GET["codskin"];
      echo $monete;
      echo $prezzo;
      $moneteaggiornato=($monete-$prezzo);
      echo $moneteaggiornato;
      if($moneteaggiornato<0){
        header('Location:prendimonete.php');
      }else{
      $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or
    die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
    $query="UPDATE utente set nomeutente=\"$nomeutente\", password=\"$password\", email=\"$email\", monete=\"$moneteaggiornato\" where codutente=\"$codutente\"";
    $query2="INSERT INTO skinutente (codutente, codskin) values (\"$codutente\", \"$codskin\")";
    $risultato = mysqli_query ($conn, $query) or
    die ("Tabella non raggiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
    $risultato2 = mysqli_query ($conn, $query2) or
    die ("Tabella non raggiungibile 2 " . mysqli_error($conn) . " " . mysqli_errno($conn) );
    header('Location:negozio.php');
}
mysqli_close($conn);

      ?>
</body>
    </html>