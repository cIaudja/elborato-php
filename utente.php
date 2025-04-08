<html>
    <head>
    <link href="user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
<?php
include("menu.php");
?>
  <div class="header" style="min-height: 600px;  background-size: cover; background-position: center top;">
    <span class="sfondo"></span>
    <div class="scritte">
      <div class="row">
        <div class="posizione1 posizione2">
            <?php
          echo "<h1>Ciao "; 
          echo $_SESSION['nomeutente'];
          echo "</h1>";
          ?>
          <p class="text-white mt-0 mb-5">Questa è la pagina del tuo profilo. Qui puoi vedere tutti gli aspetti che hai acquistato e modificare le tue credenziali.</p>
          <form action="modificaprofilo.php">
          <input type=submit value="Modifica il tuo profilo">
</form>
        </div>
      </div>
    </div>
  </div>
<div class="scedautente">
<?php
$nomeutente=$_SESSION['nomeutente'];
    $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
    $query = "SELECT * FROM utente where nomeutente='$nomeutente'"; 
     $risultato = mysqli_query ($conn, $query);
?>
        <hr></hr>

    <div class="wrapper">
        <div id="contenitore">
            <div id="intestazione">
            <h3>Il mio account</h3>
            </div>
                <h5 >Informazioni utente</h5>
                <div class="righe">
<?php     
    while ($riga = mysqli_fetch_assoc ($risultato) ){
        echo "<h6>Username:&nbsp</h6>";
        echo $riga['nomeutente'];
        echo "</div><div class=\"righe\"><br /><h6>Password:&nbsp</h6>";
        echo $riga['password'];
        echo "</div><div class=\"righe\"><br /><h6>Email:&nbsp</h6>";
        echo $riga['email'];
        echo "</div><div class=\"righe\"><br /><h6>Monete:&nbsp</h6>";
        echo $riga['monete'];
        }
?>
</div>
    <hr>
        <h5 >Aspetti posseduti</h5>

        <?php
        $query2 = "SELECT * FROM skin inner join skinutente on skin.codskin=skinutente.codskin inner join utente on skinutente.codutente=utente.codutente where nomeutente='$nomeutente' order by nomeskin"; 
        $risultato2 = mysqli_query ($conn, $query2);
        while ($riga2 = mysqli_fetch_assoc ($risultato2) ){
        echo "<div class=\"righe\"><h6>Nome:&nbsp</h6>";
        echo "<div class=\"minuscolo\">";
        echo $riga2['nomeskin'];
        echo "</div>";
        echo "</div><div class=\"righe\"><br /><h6>Aspetto:&nbsp</h6>";
        echo "<img src=";
        echo $riga2['fotoskin'];
        echo ">";
        echo "</div><div class=\"righe\"><br /><h6>Prezzo:&nbsp</h6>";
        echo $riga2['prezzo'];
        echo "&nbspmonete</div>";
        
        }
        ?>


            <hr>
       
            <form action="disconnetti.php">
            <input type="submit" value="disconnettiti" style="margin-bottom: 14px;"> 
        </form>
    </div>
    
    </body>
</html> 