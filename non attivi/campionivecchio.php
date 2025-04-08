<!DOCTYPE html>
<html>  
  <head>      
      <title>Wild rift campioni</title>
      <link href="campioni.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <?php
      include("menu.php");
    ?>

    <h2>CAMPIONI</h2>
      <button class="filtro attivo" onclick="filterSelection('tutti')"> Tutti i ruoli</button>
      <button class="filtro" onclick="filterSelection('assassini')"> Assassini</button>
      <button class="filtro" onclick="filterSelection('combattenti')"> Combattenti</button>
      <button class="filtro" onclick="filterSelection('maghi')"> Maghi</button>
      <button class="filtro" onclick="filterSelection('tiratori')"> Tiratori</button>
      <button class="filtro" onclick="filterSelection('supporti')"> Supporti</button>
      <button class="filtro" onclick="filterSelection('tank')"> Tank</button>
    </br>
  <?php
    $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
    $query = "SELECT * FROM campione";
    $risultato = mysqli_query ($conn, $query) or die ("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
    while ($riga = mysqli_fetch_assoc ($risultato) ){
      echo "<a href=\"singolocamp.php\" value=>";
      echo "<img src=";
      echo $riga['foto'];
      echo ">";
      echo "</a>";
    }
  ?>

</body>
</html>