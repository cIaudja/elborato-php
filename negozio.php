<html>
<head><title>Negozio</title>
<link href="notifica.css" rel="stylesheet" type="text/css"> 
</head>
<body>
    <?php
        include("menu.php");
        if($_SESSION['loggato']) header('Location:negozio1.php');
    ?>
<div class="wrapper">
<h1>Devi effettuare l'accesso per poter accedere al negozio</h1>
<form action="login.php">
<input type="submit" value="Accedi">
</form>
</div>
</body>
</html>