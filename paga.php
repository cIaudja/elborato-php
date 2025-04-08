<html>
<head>
    <title>Pagamento</title>
    <link href="notifica.css" rel="stylesheet" type="text/css"> 
</head>
<body>
    <?php
    include ("menu.php");
    $nomeutente=$_SESSION['nomeutente'];
    $password=$_GET["password"];
    $email=$_GET["email"];    
    $codutente=$_GET["codutente"];
      $moneteacc=$_GET["monete"];
      $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
      $query3="SELECT * FROM utente where nomeutente='$nomeutente'";
      $risultato3 = mysqli_query ($conn, $query3) or die ("Tabella non raggiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
      while ($riga3 = mysqli_fetch_assoc ($risultato3) ){
        $monete=$riga3['monete'];
      }
      $monetetot=$monete+$moneteacc;
    $query="UPDATE utente set nomeutente=\"$nomeutente\", password=\"$password\", email=\"$email\", monete=\"$monetetot\" where codutente=\"$codutente\"";
    $risultato = mysqli_query ($conn, $query) or
    die ("Tabella non raggiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
   header('Location:negozio.php');
mysqli_close($conn);

      ?>