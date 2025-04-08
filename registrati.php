<!DOCTYPE html>
<html>  
    <head>
        <title>Registrazione</title>
         <link href="registrati.css" rel="stylesheet" type="text/css">  
    </head>
    <body>
    <div class="wrapper">
        <div id="formContent">
            
            <h2 class="active"> Registrazione</h2>

            <form action="controlloregistrazione.php">
                <input type="text" id="email" name="email" placeholder="email" required>
                <input type="text" id="nomeutente" name="nomeutente" placeholder="nome utente" required>
                <input type="password" id="password"  name="password" placeholder="password" required>
                <input type="submit" value="Registrati">
            </form>
            <div id="accedi">
            <a href="login.php">o Accedi</a>
            </div>
            
            <div id="formFooter">
                <a href="supporto.php" >Stai riscontrando qualche problema? Contattaci</a>
            </div>
        </div>
    </div>
</body>
</head>