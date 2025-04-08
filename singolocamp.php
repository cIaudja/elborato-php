<!DOCTYPE html>
<html>  
  <head>      
      <title>Campione      </title>
      <link href="singolocamp.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  <div class="row">
  <div class="column">
    <?php
    include ("menu.php");
      $codcamp=$_GET["codcamp"];
      echo $codcamp;
      $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
      $query = "SELECT * FROM campione where codcamp=$codcamp";
      $risultato = mysqli_query ($conn, $query) or die ("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
      while ($riga = mysqli_fetch_assoc ($risultato) ){
      echo "<div class=\"wrapper\">";
        echo "<h1>";
        echo $riga['nome'];
        echo "</h1><br /><p>";
        echo $riga['descrizione'];
      echo "</p></div>";
      echo "<div class=\"difficolta\">";
        echo "difficolt&agrave:";
        $j=$riga['difficolta'];
        for($i=0; $i<$j; $i++){
          echo "<img src=\"Immagini/difficolta.png\" style=\" flex-direction: row; box-shadow:none\">";
        }
        echo "</div>";
      }
      echo "<div class=\"wrapper\">";
      $query2 = "SELECT * FROM skin where codcampione=$codcamp and originale='0'";
      $risultato2 = mysqli_query ($conn, $query2);
      while ($riga2 = mysqli_fetch_assoc ($risultato2) ){
        echo "<img src=\"";
        echo $riga2['fotoskin'];
        echo "\" style=\"width:700px;\">";
      }
      ?>
      </div>
      <hr>
      <div class="negozio">
      <a class="a" href="negozio.php">Acquista gli aspetti in negozio</a>
    </div>
      <?php
            echo "<div class=\"righe\">";
      $query3 = "SELECT * FROM skin where codcampione=$codcamp and originale='1'";
      $risultato3 = mysqli_query ($conn, $query3);
      while ($riga3 = mysqli_fetch_assoc ($risultato3) ){
        echo "<div class=\"skin\">";
          echo "<img src=\"";
          echo $riga3['fotoskin'];
          echo "\" style=\"width:400px;\">";
        echo "</div>";  
      }
      echo "</div>";  
      mysqli_close($conn);
    ?>
</div></div>
</body>
</html>