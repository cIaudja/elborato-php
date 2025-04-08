<!DOCTYPE html>
<html>  
    <head>      
        <title>Panoramica di gioco</title>
        <link href="panoramica.css" rel="stylesheet" type="text/css">
        <style>
                #bg1 {
        background: url(Immagini/altodestra.png) top left no-repeat, url(Immagini/bg2.png) bottom left no-repeat;
      } 
      #bg2 {
        background: url(Immagini/bg2.png);
      } 
            </style>
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <div class="sfondo">
            <div class="testosuimg">
                <h1> cos'&egrave<br/> wild rift?</h1>
                <p>Entra in Wild Rift: l'esperienza MOBA 5 vs 5 di League of Legends basata su abilità e strategia, ora ricreata per console e dispositivi mobili. Con comandi aggiornati e partite più veloci, i giocatori di ogni livello possono fare squadra con gli amici, confermare il proprio campione e iniziare a giocare ovunque si trovino.</p>
            </div>
        </div>
        <div id="bg1">
          <div class="titoletto">
            <h2>obiettivo del gioco</h2>
        </div>
            <div class="contenitore">
        <div class="fotoscorrim dissolvi">
        <img src="Immagini/scorrip1.jpg" style="width:500px">
        <div class="testo">
            <h4>1 - scegli la tua corsia</h4>
            <p>Scatena il tuo miglior tiratore o supporto nella corsia doppia, sceglia incantesimi in quella centrale o scatenati con un picchiatore nella corsia singola.</p>
        </div>
        </div>

        <div class="fotoscorrim dissolvi">
        <img src="Immagini/scorrip2.jpg" style="width:500px">
        <div class="testo">
        <h4>2 - affornta la giunga</h4>
            <p>Invece di concentrarti su una sola corsia, puoi dare la caccia ai mostri nella giunga. Abbatti creature epiche come il Barone Nashor o i Draghi per sbloccare potenti buff per la tua squadra.</p>
        </div>
        </div>

        <div class="fotoscorrim dissolvi">
        <img src="Immagini/scorrip3.jpg" style="width:500px">
        <div class="testo">
        <h4>3 - distruggi le torri per raggiungere il nexus</h4>
            <p>In ogni corsia, torri difensive si frappongono tra la tua squadra e la base nemica. Abbatti queste strutture e apriti la strada verso la vittoria.</p>
        </div>
        </div>

        <div class="fotoscorrim dissolvi">
        <img src="Immagini/scorrip4.jpg" style="width:500px">
        <div class="testo">
        <h4>4 - distruggi la base nemica</h4>
            <p>Il nexus è il cuore della base di entrambe le squadre. Per vincere la partita, devi distruggere quello del nemico prima che lui distrugga il tuo.</p>
        </div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
          </div>
          <div id="bg2">
          <div class="centro">
          <hr style="width:90%; margin-top:40px">
                <h3>campioni</h3>

                <p style="  font-size: 20px;  border-bottom: 1px solid lightblue;">Con oltre 40 campioni da collezionare e utilizzare, troverai senza dubbio il tuo preferito con cui sfoggiare il tuo stile.</p>
                </div>
                <div class="vicini">
                <form action="negozio.php">
                  <input type="submit" value="Vai al negozio">
             </form>
             <form action="campioni.php">
                  <input type="submit" value="Visualizza tutti i campioni">
             </form>
    </div>
             <div class="row">
        <div class="column">
        <div class="fotoscorrimento1 ">
          <img src="Immagini/jinx1.png" style="width:400px">
        </div>
        <div class="fotoscorrimento1 ">
          <img src="Immagini/jinx2.png" style="width:400px">
        </div>
        <div class="fotoscorrimento1 ">
          <img src="Immagini/jinx3.png" style="width:400px">
        </div>
        </div>
        <div class="column">
        <div class="fotoscorrimento2 ">
          <img src="Immagini/lux1.png" style="width:400px">
        </div>
        <div class="fotoscorrimento2 ">
          <img src="Immagini/lux2.png" style="width:400px">
        </div>
        <div class="fotoscorrimento2 ">
          <img src="Immagini/lux3.png" style="width:400px">
        </div>
        </div>
        <div class="column">
        <div class="fotoscorrimento3 ">
          <img src="Immagini/zed2.png" style="width:400px">
        </div>
        <div class="fotoscorrimento3 ">
          <img src="Immagini/zed1.png" style="width:400px">
        </div>
        <div class="fotoscorrimento3 ">
          <img src="Immagini/zed3.png" style="width:400px">
        </div>
        </div>
        </div>
    </div>
        <script>

           let fotoscorrim = 1;
            scorrim(fotoscorrim);
            function plusSlides(n) {
                scorrim(fotoscorrim += n);
            }
            function scorrim(n) {
                let m;
                let fotos = document.getElementsByClassName("fotoscorrim");
                if (n > fotos.length) {fotoscorrim = 1} 
                if (n < 1) {fotoscorrim = fotos.length}
                for (m = 0; m < fotos.length; m++) {
                    fotos[m].style.display = "none"; 
                }
                fotos[fotoscorrim-1].style.display = "block"; 
            }

            let fotoi1 = 0;
      scorrimento1();
      function scorrimento1() {
        let i;
        let foto1 = document.getElementsByClassName("fotoscorrimento1");
          for (i = 0; i < foto1.length; i++) {
            foto1[i].style.display = "none"; 
          }
        fotoi1++;
        if (fotoi1 > foto1.length) {fotoi1 = 1} 
        foto1[fotoi1-1].style.display = "block"; 
        setTimeout(scorrimento1, 3000); 
      }

      let fotoi2 = 0;
      scorrimento2();
      function scorrimento2() {
        let l;
        let foto2 = document.getElementsByClassName("fotoscorrimento2");
          for (l = 0; l < foto2.length; l++) {
            foto2[l].style.display = "none"; 
          }
        fotoi2++;
        if (fotoi2 > foto2.length) {fotoi2 = 1} 
        foto2[fotoi2-1].style.display = "block"; 
        setTimeout(scorrimento2, 3000); 
      }

      let fotoi3 = 0;
      scorrimento3();
      function scorrimento3() {
        let k;
        let foto3 = document.getElementsByClassName("fotoscorrimento3");
          for (k = 0; k < foto3.length; k++) {
            foto3[k].style.display = "none"; 
          }
        fotoi3++;
        if (fotoi3 > foto3.length) {fotoi3 = 1} 
        foto3[fotoi3-1].style.display = "block"; 
        setTimeout(scorrimento3, 3000); 
      }
    </script>
    </body>
</html>