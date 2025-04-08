<html>
<head>
    <title>Acquista altre monete</title>
    <link href="prendimonete.css" rel="stylesheet" type="text/css"> 
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
       //  echo "<div id=\"monete\">";
         echo  $riga2['monete'];
        // echo "</div>";
         echo "&nbspmonete";
         echo "</div>";
     }
?>
</div>

    <div class="wrapper">
    <h1>Non hai abbastanza monete? Acquistane altre!</h1>
        <div id="formContent">
        <div class="fila">
        <div class="scelta">
            <a href="pagamento.php?monete=475">
            <h2 style="margin-top:0px"> 475 monete</h2></br>
           <p> 4,99 €</p></a>
            </div>            
        <div class="scelta">
            <a href="pagamento.php?monete=1000">
            <h2 style="margin-top:0px"> 1000 monete</h2></br>
           <p> 9,99 €</p></a>
    </div>
    <div class="scelta">
            <a href="pagamento.php?monete=2050">
            <h2 style="margin-top:0px"> 2050 monete</h2></br>
           <p> 19,99 €</p></a>
            </div>
        </div>
            <img src="Immagini/moneta.png">
            <div class="fila">
        <div class="scelta">
            <a href="pagamento.php?monete=3650">
            <h2 style="margin-top:0px"> 3650 monete</h2></br>
           <p> 34,99 €</p></a>
            </div>            
        <div class="scelta">
            <a href="pagamento.php?monete=5350">
            <h2 style="margin-top:0px"> 5350 monete</h2></br>
           <p> 49,99 €</p></a>
    </div>
    <div class="scelta">
            <a href="pagamento.php?monete=11000">
            <h2 style="margin-top:0px"> 11000 monete</h2></br>
           <p> 99,99 €</p></a>
            </div>
        </div>
            </div>
        </div>
</body>
</html>