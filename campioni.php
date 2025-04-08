<!DOCTYPE html>
<html>  
  <head>      
      <title>Campioni</title>
      <link href="campioni.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <?php
      include("menu.php");
    ?> 
    <div class="wrapper2">
   <h1> scegli il tuo campione</h1>
    </div>
<div class="wrapper">
    <?php
        $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
        $query = "SELECT * FROM campione";
        $risultato = mysqli_query ($conn, $query) or die("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
        while ($riga = mysqli_fetch_assoc ($risultato) ){
            echo "<div class=\"media\">";
                echo "<div class=\"layer\">";
                    echo "<a href=\"singolocamp.php?codcamp=".$riga['codcamp']."\">";
                        echo "<p>";
                        echo $riga['nome'];
                        echo "</p>";
                    echo "</a>";
                echo "</div>";
                echo "<img src=";
                echo $riga['foto'];
                echo ">";
            echo "</div>\n";
        }
    ?>
</div> 
</body>
</html>