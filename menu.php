<?php
session_start();
?>
<!DOCTYPE html>
<html>  
    <head>
        <link href="menu.css" rel="stylesheet" type="text/css">  
    </head>
<body>
    <nav class="navMenu">
        <a href="home.php">home</a>
        <a href="panoramica.php">Panoramica di gioco</a>
        <a href="campioni.php">Campioni</a>
        <a href="negozio.php">Negozio</a>
        <a href="supporto.php">Supporto</a>
        <?php
       if( isset($_SESSION['loggato']) && $_SESSION['loggato']){
        echo"<a href=\"utente.php\" style=\"float:right;\">".$_SESSION['nomeutente']."</a>";  
        }else{
        echo"<a href=\"login.php\" style=\"float:right;\">Accedi</a>";
        $_SESSION['nomeutente']=null;
        }
?>
      <div class="dot"></div>
    </nav>
</body>
</html>