<!DOCTYPE html>
<html>  
  <head>      
      <title>Aspetto</title>
      <link href="confermaaspetto.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  <div class="row">
  <div class="column">
    <?php
    include ("menu.php");
      $codskin=$_GET["codskin"];
      echo $codskin;
      ?>
      <div class="contenitore">
      <div class="moneteuser">
          <?php
       $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
          $nomeutente=$_SESSION['nomeutente'];
           $query2 = "SELECT * FROM utente where nomeutente='$nomeutente'";
           $risultato2 = mysqli_query ($conn, $query2) or die("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
           while ($riga2 = mysqli_fetch_assoc ($risultato2) ){
               echo "<div=\"destra\">";
               echo  $riga2['monete'];
               echo "&nbspmonete";
               echo "</div>";
               $monete=$riga2['monete'];
               $nomeutente=$riga2['nomeutente'];
               $password=$riga2['password'];
               $email=$riga2['email'];
               $codutente=$riga2['codutente'];
           }?>
          </div>
          </div>
          <h2>
          <?php
      $query = "SELECT * FROM skin where codskin=$codskin";
      $risultato = mysqli_query ($conn, $query) or die ("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
      while ($riga = mysqli_fetch_assoc ($risultato) ){
      echo "<div class=\"wrapper\">";
      echo "<div class=\"righe\">";
        echo "Nome aspetto: ";
        echo $riga['nomeskin'];
        echo "</div>";
        echo "<div class=\"righe\">";
        echo "Aspetto: ";
        echo "<img src=\"";
        echo $riga['fotoskin'];
        echo "\" style=\"width:700px;\">";
        echo "</div>";
        echo "<div class=\"righe\">";
      echo "Prezzo: ";
      echo $riga['prezzo'];
        echo " monete</div>";
        echo "</div>";
        $prezzo=$riga['prezzo'];
        $codskin=$riga['codskin'];
      }
    ?>
    </h2>
    <div class="righe">
    <form action="acquistaaspetto.php">
    <input type="hidden" name="monete" value="<?php echo$monete;?>">
    <input type="hidden" name="prezzo" value="<?php echo$prezzo;?>">
    <input type="hidden" name="nomeutente" value="<?php echo $nomeutente;?>" />
<input type="hidden" name="password" value="<?php echo $password;?>" />
<input type="hidden" name="email" value="<?php echo $email;?>" />
<input type="hidden" name="codutente" value="<?php echo $codutente;?>" />
<input type="hidden" name="codskin" value="<?php echo $codskin;?>" />
    <input type="submit" value="Procedi all'acquisto">
    </form>
    <form action="negozio1.php">
    <input type="submit" value="Torna indietro">
    </form>
    </div>
</div></div>
</body>
</html>