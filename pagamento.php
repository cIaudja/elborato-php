<html>
<head>
    <title>Pagamento</title>
    <link href="pagamento.css" rel="stylesheet" type="text/css"> 
</head>
<body>
    <?php
    include ("menu.php");
    $monete=$_GET['monete'];
    ?>
    <div class="wrapper">
        <div id="cartacredito">
            <h2> Carta di credito </h2>
            <form action="paga.php">
            <p>Numero di carta</p>
            <div class="numm">
            <input type="text" maxlength="4" name="num" placeholder="0000" required/>
            <input type="text" maxlength="4" name="num" placeholder="0000" required/>
            <input type="text" maxlength="4" name="num" placeholder="0000" required/>
            <input type="text" maxlength="4" name="num" placeholder="0000" required/>
            </div>
            <div class="riga">
                <div class="colonna">
                    <p style="margin-top:10px;">Data scadenza</p>
                    <div class="scadenza">
                        <select id="mese">
                        <option value="mm"  disabled selected>mm</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        </select>
                        <select id="anno">
                        <option value="aa"  disabled selected>aa</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        </select>
                    </div>
                </div>
                <div class="colonna">
                <div class="cvv1">
                    <p style="margin-top:10px;">CVV</p>
                    <div class="cvv">
                    <input type="text" maxlength="3" name="cvv" placeholder="000" required/>
                    </div>
                </div>
                </div>
            </div>
            <p style="margin-top:10px;">Nome intestatario</p>
            <input type="text" id="nome"  name="nome" placeholder="es: Mario Rossi" required style="margin-bottom:10px"/>
            <div class="invia">
            </div>
            <?php
            echo    "<input type=\"hidden\" name=\"monete\" value=\"$monete\" />";
            $conn = mysqli_connect ('localhost', 'root', "", 'wildrift') or die ("Connessione non consentita " . mysqli_connect_error()." ".mysqli_connect_errno());
            $nomeutente=$_SESSION['nomeutente'];
             $query = "SELECT * FROM utente where nomeutente='$nomeutente'";
             $risultato = mysqli_query ($conn, $query) or die("Tabella non ragiungibile " . mysqli_error($conn) . " " . mysqli_errno($conn) );
             while ($riga = mysqli_fetch_assoc ($risultato) ){
                 $password=$riga['password'];
                 $email=$riga['email'];
                 $codutente=$riga['codutente'];
             }?>
            
            <input type="hidden" name="password" value="<?php echo $password;?>" />
<input type="hidden" name="email" value="<?php echo $email;?>" />
<input type="hidden" name="codutente" value="<?php echo $codutente;?>" />
        </div>
                <input type="submit" value="Effettua il pagamento" />

    </div>
   
</body>
</html>