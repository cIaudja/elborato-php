<html>
<head><title>Negozio</title>
    <link href="negozio.css" rel="stylesheet" type="text/css">  
</head>
<body>
    <?php
        include("menu.php");
        $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
    ?>
    <div class="contenitore">
<div class="moneteuser">
    <?php

    $nomeutente=$_SESSION['nomeutente'];
     $query2 = "SELECT * FROM utente where nomeutente='$nomeutente'";
     $risultato2 = mysqli_query ($conn, $query2) or die("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
     while ($riga2 = mysqli_fetch_assoc ($risultato2) ){
         echo "<div=\"destra\">";
         echo  $riga2['monete'];
         echo "&nbspmonete";
         echo "</div>";
     }

    ?>
    </div>
    </div>
        <div class="row">
  <div class="column">
        <img class="img" src="Immagini/bgnegozio.jpeg">
        <div class="testosuimg">
        <p>Per acquistare un aspetto premi l'icona delle monete</p>
    </div>
</div>
  <div class="column">
      <div class="scritte">
          <h1>Benvenuto nel negozio</h1>
          <p>Qui puoi acquistare gli aspetti dei tuoi campioni preferiti con le monete di gioco.</p>
          <form action="prendimonete.php">
          <input type="submit" value="Non hai abbastanza monete? Acquistane altre!">
    </form>
  </div>
</div>
</div>
<hr>
    <div class="wrapper">
        <?php
        $query = "SELECT * FROM skin WHERE originale='1' AND codskin NOT IN (SELECT skinutente.codskin from skinutente inner join utente on utente.codutente=skinutente.codutente where nomeutente='$nomeutente') ";
        $risultato = mysqli_query ($conn, $query) or die("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
        while ($riga = mysqli_fetch_assoc ($risultato) ){
            echo "<div class=\"skin\">";
            echo "<div class=\"colonne\">";
                        echo "<h3>";
                        echo $riga['nomeskin'];
                        echo "</h3>";
                echo "<img src=\"";
                echo $riga['fotoskin'];
                echo "\" style=\"width:400px\"><br />";
                echo "<div class=\"riga\">";
                echo "prezzo:&nbsp";
                echo "<div id=\"prezzo\">";
                echo $riga['prezzo'];
                echo "</div>";
                echo "&nbspmonete";
                echo "<a href=\"confermaaspetto.php?codskin=".$riga['codskin']."\">";
                echo "</div>";
                echo "<img class=\"acquista\" src=\"Immagini/monete.png\" style=\"margin-top:8px;\">";
                echo "</a>";
            echo "</div>";
            echo "</div>";
        }

        ?>
        </div>
</body>
</html>