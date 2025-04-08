<!DOCTYPE html>
<html>  
    <head>
        <title>Login</title>
         <link href="login.css" rel="stylesheet" type="text/css">  
    </head>
    <body>
    <div class="wrapper">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2> Accesso </h2>

            <!-- Login Form -->
            <form action="controllologin.php">
                <input type="text" id="nomeutente" name="nomeutente" placeholder="nome utente" required>
                <input type="password" id="password"  name="password" placeholder="password" required>
                <input type="submit" value="Accedi">
            </form>
            <div id="registrati">
            <a href="registrati.php">o Registrati</a>
            </div>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a href="supporto.php" >Password dimenticata?</a>
            </div>
        </div>
    </div>
   
</body>
</head>