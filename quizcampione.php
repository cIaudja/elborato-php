<html>
    <head>
        <link href="quizcampione.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <p id="1">Come ti piacerebbe combattere?</p></br>
    <div class="divisione">
        <div>
                <button id="unouno" onclick="unouno()">Il gioco di squadra è la chiave di tutto</button>
                <p id="1.1"></p>
                    <button id="dueuno" onclick="dueuno()">Aiutare gli alleati</button>
                    <p id="2.1"></p>
                        <button id="treuno" onclick="treuno()">Do alla mia squadra l'aiuto di cui ha bisogno</button>
                        <p id="3.1"></p>
                            <a href="singolocamp.php?codcamp=28" id="camp1">La furia della tempesta</a> <!--janna = 28-->
                            <a href="singolocamp.php?codcamp=66" id="camp2">La splendida musica</a> <!--sona = 66-->
                            <a href="singolocamp.php?codcamp=49" id="camp3">Le maree dirompenti</a> <!--nami = 49-->
                        <button id="tredue" onclick="tredue()">Sono io a scatenare i combattimenti a squadre</button>
                        <p id="3.2"></p>
                            <a href="singolocamp.php?codcamp=5" id="camp4">Diventiamo amici... per sempre</a> <!--amumu = 5-->
                            <a href="singolocamp.php?codcamp=9" id="camp5">Lascia che ti dia una mano</a> <!--blitzcrank = 9-->
                            <a href="singolocamp.php?codcamp=11" id="camp6">Il mio scudo &egrave la mia arma</a> <!--braum = 11-->
                    <button id="duedue" onclick="duedue()">Abbattere i nemici</button>
                    <p id="2.2"></p>
                        <button id="tretre" onclick="tretre()">Infliggo danni in continuazione</button>
                        <p id="3.3"></p>
                            <a href="singolocamp.php?codcamp=33" id="camp7">Super mega razzo della morte</a> <!--jinx = 33-->
                            <a href="singolocamp.php?codcamp=7" id="camp8">Freccia devastante</a> <!--ashe = 7-->
                            <a href="singolocamp.php?codcamp=47" id="camp9">Tempesta di proiettili</a> <!--miss fortune = 47-->
                        <button id="trequattro" onclick="trequattro()">Abbatto i nemici prima che possano toccarmi</button>
                        <p id="3.4"></p>
                            <a href="singolocamp.php?codcamp=83" id="camp10">Roba che esplode</a> <!--ziggs = 83-->
                            <a href="singolocamp.php?codcamp=44" id="camp11">Arcobaleni. Tanti arcobaleni</a> <!--lux = 44-->
                            <a href="singolocamp.php?codcamp=61" id="camp12">Una mossa che non ammette repliche</a> <!--seraphine = 62-->
                </div>
                <div>
                <button id="unodue" onclick="unodue()">Sono più un lupo solitario</button>
                <p id="1.2"></p>
                    <button id="duetre" onclick="duetre()">Scegliere i bersagli e poi abbatterli</button>
                    <p id="2.3"></p>
                        <button id="trecinque" onclick="trecinque()">Li distruggo tutti</button>
                        <p id="3.5"></p>
                            <a href="singolocamp.php?codcamp=1" id="camp13">Segui la volpe</a> <!--janna = 1-->
                            <a href="singolocamp.php?codcamp=72" id="camp14">Affidati alla fortuna</a> <!--twisted fate = 72-->
                            <a href="singolocamp.php?codcamp=6" id="camp15">Manda avanti il tuo orsacchiotto?!?</a> <!--annie = 6-->
                        <button id="tresei" onclick="tresei()">Non sanno mai quando colpir&ograve</button>
                        <p id="3.6"></p>
                            <a href="singolocamp.php?codcamp=82" id="camp16">Colpisci dalle ombre!</a> <!--zed = 82-->
                            <a href="singolocamp.php?codcamp=22" id="camp17">Ti catapulti dagli abiussi salmastri!</a> <!--fizz = 22-->
                            <a href="singolocamp.php?codcamp=2" id="camp18">Lanci una bomba fumogena e attacchi</a> <!--akali = 2-->
                    <button id="duequattro" onclick="duequattro()">Eliminare chiunque mi capiti a tiro</button>
                    <p id="2.4"></p>
                        <button id="tresette" onclick="tresette()">Sono un tipo che colpisce forte</button>
                        <p id="3.7"></p>
                            <a href="singolocamp.php?codcamp=24" id="camp19">La spada</a> <!--garen = 24-->
                            <a href="singolocamp.php?codcamp=76" id="camp20">Il guanto</a> <!--vi = 76-->
                            <a href="singolocamp.php?codcamp=30" id="camp21">Il lampione?!?</a> <!--jax = 30-->
                        <button id="treotto" onclick="treotto()">Essere pressocch&egrave immortale</button>
                        <p id="3.8"></p>
                            <a href="singolocamp.php?codcamp=45" id="camp22">Scatenarti!</a> <!--malphite = 45-->
                            <a href="singolocamp.php?codcamp=4" id="camp23">Travolgere!</a> <!--alistar = 4-->
                            <a href="singolocamp.php?codcamp=29" id="camp24">Dominare!</a> <!--jarvan iv = 29-->
            </div>
            <div class="clearer"> </div>
</div>
        <script>
            function unouno(){
                var element = document.getElementById("1"); /*seleziona la domanda precedente*/
                element.remove(); /*elimina la domanda*/
                var element = document.getElementById("unodue"); /*seleziona elemento unodue*/
                element.remove(); /*elimina elemento unodue*/
                var element = document.getElementById("unouno"); /*si seleziona */
                element.remove(); /*elimina se stesso */
                document.getElementById("1.1").innerHTML = "Sogni di..."; /*mostra elemento 1.1*/
                document.getElementById("dueuno").style.display = 'block'; /*mostra elemento dueuno*/
                document.getElementById("duedue").style.display = 'block'; /*mostra elemento duedue*/
            }

            function unodue(){
                var element = document.getElementById("1"); 
                element.remove(); 
                var element = document.getElementById("unouno");
                element.remove();
                var element = document.getElementById("unodue");
                element.remove();
                document.getElementById("1.2").innerHTML = "Cosa ti piace davvero dello scontro?";
                document.getElementById("duetre").style.display = 'block'; 
                document.getElementById("duequattro").style.display = 'block'; 
            }
            
            function dueuno(){
                var element = document.getElementById("1.1");
                element.remove();
                var element = document.getElementById("duedue");
                element.remove();
                var element = document.getElementById("dueuno");
                element.remove();
                document.getElementById("2.1").innerHTML = "Preferisci iniziare gli scontri o supportare la tua squadra?";
                document.getElementById("treuno").style.display = 'block'; 
                document.getElementById("tredue").style.display = 'block'; 
            }

            function duedue(){
                var element = document.getElementById("1.1");
                element.remove();
                var element = document.getElementById("dueuno");
                element.remove();
                var element = document.getElementById("duedue");
                element.remove();
                document.getElementById("2.2").innerHTML = "Come ottieni le tue uccisioni?";
                document.getElementById("tretre").style.display = 'block'; 
                document.getElementById("trequattro").style.display = 'block'; 
            }

            function duetre(){
                var element = document.getElementById("1.2");
                element.remove();
                var element = document.getElementById("duequattro");
                element.remove();
                var element = document.getElementById("duetre");
                element.remove();
                document.getElementById("2.3").innerHTML = "Perch&egrave i nemici ti temono?";
                document.getElementById("trecinque").style.display = 'block'; 
                document.getElementById("tresei").style.display = 'block'; 
            }

            function duequattro(){
                var element = document.getElementById("1.2");
                element.remove();
                var element = document.getElementById("duetre");
                element.remove();
                var element = document.getElementById("duequattro");
                element.remove();
                document.getElementById("2.4").innerHTML = "Cosa rende grande un guerriero?";
                document.getElementById("tresette").style.display = 'block'; 
                document.getElementById("treotto").style.display = 'block'; 
            }

            function treuno(){
                var element = document.getElementById("2.1");
                element.remove();
                var element = document.getElementById("tredue");
                element.remove();
                var element = document.getElementById("treuno");
                element.remove();
                document.getElementById("3.1").innerHTML = "Ottimo. è ora che i tuoi nemici affrontino...";
                document.getElementById("camp1").style.display = 'block'; 
                document.getElementById("camp2").style.display = 'block'; 
                document.getElementById("camp3").style.display = 'block'; 
            }

            function tredue(){
                var element = document.getElementById("2.1");
                element.remove();
                var element = document.getElementById("treuno");
                element.remove();
                var element = document.getElementById("tredue");
                element.remove();
                document.getElementById("3.2").innerHTML = "Scegli il motto che preferisci.";
                document.getElementById("camp4").style.display = 'block'; 
                document.getElementById("camp5").style.display = 'block'; 
                document.getElementById("camp6").style.display = 'block'; 
            }
            
            function tretre(){
                var element = document.getElementById("2.2");
                element.remove();
                var element = document.getElementById("trequattro");
                element.remove();
                var element = document.getElementById("tretre");
                element.remove();
                document.getElementById("3.3").innerHTML = "Caricare, mirare...";
                document.getElementById("camp7").style.display = 'block'; 
                document.getElementById("camp8").style.display = 'block'; 
                document.getElementById("camp9").style.display = 'block'; 
            }

            function trequattro(){
                var element = document.getElementById("2.2");
                element.remove();
                var element = document.getElementById("tretre");
                element.remove();
                var element = document.getElementById("trequattro");
                element.remove();
                document.getElementById("3.4").innerHTML = "Controlli il campo di battaglia con...";
                document.getElementById("camp10").style.display = 'block'; 
                document.getElementById("camp11").style.display = 'block'; 
                document.getElementById("camp12").style.display = 'block'; 
            }

            function trecinque(){
                var element = document.getElementById("2.3");
                element.remove();
                var element = document.getElementById("tresei");
                element.remove();
                var element = document.getElementById("trecinque");
                element.remove();
                document.getElementById("3.5").innerHTML = "Per bloccare i nemici e spazzarli via...";
                document.getElementById("camp13").style.display = 'block'; 
                document.getElementById("camp14").style.display = 'block'; 
                document.getElementById("camp15").style.display = 'block'; 
            }

            function tresei(){
                var element = document.getElementById("2.3");
                element.remove();
                var element = document.getElementById("trecinque");
                element.remove();
                var element = document.getElementById("tresei");
                element.remove();
                document.getElementById("3.6").innerHTML = "Quando meno se lo aspettano, tu...";
                document.getElementById("camp16").style.display = 'block'; 
                document.getElementById("camp17").style.display = 'block'; 
                document.getElementById("camp18").style.display = 'block'; 
            }

            function tresette(){
                var element = document.getElementById("2.4");
                element.remove();
                var element = document.getElementById("treotto");
                element.remove();
                var element = document.getElementById("tresette");
                element.remove();
                document.getElementById("3.7").innerHTML = "Ok, ora prendi...";
                document.getElementById("camp19").style.display = 'block'; 
                document.getElementById("camp20").style.display = 'block'; 
                document.getElementById("camp21").style.display = 'block'; 
            }

            function treotto(){
                var element = document.getElementById("2.4");
                element.remove();
                var element = document.getElementById("tresette");
                element.remove();
                var element = document.getElementById("treotto");
                element.remove();
                document.getElementById("3.8").innerHTML = "Grazie. Ora preparati a...";
                document.getElementById("camp22").style.display = 'block'; 
                document.getElementById("camp23").style.display = 'block'; 
                document.getElementById("camp24").style.display = 'block'; 
            }

        </script>
    </body>
</html>