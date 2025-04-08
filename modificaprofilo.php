<?php
session_start();
?>
<html>
<head><title>Modifica profilo</title>
<link href="notifica.css" rel="stylesheet" type="text/css"> 
</head>
<body>
    <div class="wrapper">
<h1>Modifica i campi</h1>
<?php
$nomeutente=$_SESSION['nomeutente'];
$conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
$query = "SELECT * FROM utente where nomeutente='$nomeutente'"; 
 $risultato = mysqli_query ($conn, $query);
if($riga=mysqli_fetch_assoc($risultato)){
?>
<html>
</head>
<body>
<form action="modificaprofilo1.php">
Nome utente: <input type="text" name="nomeutente" size='20' value="<?php echo $riga['nomeutente'];?>" /><br />
Password: <input type="text" name="password" maxlength='20' size='20' value="<?php echo $riga['password'];?>" /><br />
Email: <input type="text" name="email" size='40' value="<?php echo $riga['email'];?>" /><br /><br />
<input type="hidden" name="codutente" value="<?php echo $riga['codutente'];?>" /><br />
<div class="riga">
<input type="submit" value="Modifica" /> 
</form> 
<form action="utente.php">
<input type="submit" value="Torna Indietro" />
</form>
</div>
</div>
</body>
</html>
<?php
}
?>