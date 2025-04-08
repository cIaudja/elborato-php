<?php
session_start();
?>
<html>
<head><link href="notifica.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="wrapper">
        <h1>
    <?php
        $nomeutente = $_GET["nomeutente"]; 
        $password = $_GET["password"];

        $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
        $query = "SELECT * FROM utente where nomeutente='$nomeutente' and password='$password'";
        $risultato = mysqli_query ($conn, $query);
        if(mysqli_num_rows($risultato)>=1){
            echo "Login effettuato, puoi chiudere questa finestra";
            $_SESSION['nomeutente'] = $nomeutente;
            $_SESSION['loggato'] = true;
            header('Location:home.php');
    }else{
            echo "Nome utente o password errati<br />";
            echo "<form action=\"login.php\">";
            echo "<input type=\"submit\" value=\"Torna alla pagina di login\">";
            echo "</form>";
            session_destroy();
            }
    ?>
    </h1>
        </div>
</body>
</html>