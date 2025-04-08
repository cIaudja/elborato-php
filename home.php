<!DOCTYPE html>
<html>  
  <head>      
    <title>Home</title>
    <link href="home.css" rel="stylesheet" type="text/css">
    <style>
      #bg1 {
        background: url(Immagini/altodestra.png) top left no-repeat, url(Immagini/bg1.png) bottom left no-repeat;
      } 
      #bg2 {
        background: url(Immagini/altosinistra.png) top left no-repeat, url(Immagini/sceltacampione.jpg) bottom left no-repeat;
      } 
    </style>
   </head>

  <body>
    <?php
      include("menu.php");
    ?>
    <img src="Immagini/iniziale.jpg" style="width:100%;   height: 100%; margin-top: 70px;">
    <div class="altosinistra">
      <img src="Immagini/logo_white.png" alt="logo">
      <p><b>LEAGUE OF LEGENDS, ORA SUI </br>DISPOSITIVI MOBILI. GIOCA GRATIS! </br>PRESTO DISPONIBILE SU CONSOLE.<b></p>
      <p class="scarica"><b>DISPONIBILE SU:<b></p>
      <a href="https://riotgames.sng.link/Dus0s/42qx" target=”_blank”><img src="Immagini/playstore.png" style="width: 170px;height: 50px;"></a>
      <a href="https://riotgames.sng.link/Dus0s/5d8l" target=”_blank”><img src="Immagini/apple.png" style="width: 170px;height: 50px;"></a>
      <a href="https://riotgames.sng.link/Dus0s/6zlo" target=”_blank”><img src="Immagini/galaxystore.png" style="width: 170px;height: 50px;"></a>
    </div>
    <div id="bg1">
      <div class="titolo">
        <h1>benvenuto <br />in wild rift</h1>
      </div>
      <div class="video">
        <h3>guarda il trailer ufficiale!</h3>
        <video width="800" height="520" controls>
          <source src="trailer.mp4" type="video/mp4">
          <source src="trailer.ogg" type="video/ogg">
          Il tuo web non supporta i video.
        </video>
      </div>
    </div>
    <div id="bg2">
      <h2>scegli il tuo campione</h2>
      
      <div class="contenitore">
        <div class="fotoscorrimento dissolvi">
          <img src="Immagini/scorrigaren.png" style="width:500px">
        </div>
        <div class="fotoscorrimento dissolvi">
          <img src="Immagini/scorriahri.png" style="width:500px">
        </div>
        <div class="fotoscorrimento dissolvi">
          <img src="Immagini/scorriashe.png" style="width:500px">
        </div>
        <div class=bottoni>
        <form action="quizcampione.php">
          <input type="submit" value="Trova il tuo campione">
        </form>
        <form target=”_blank” action="campioni.php">
          <input type="submit" value="Visualizza tutti i campioni">
        </form>
    </div>
    </div>
    </div>

    <script>
      let fotoi = 0;
      scorrimento();
      function scorrimento() {
        let i;
        let foto = document.getElementsByClassName("fotoscorrimento");
          for (i = 0; i < foto.length; i++) {
            foto[i].style.display = "none"; 
          }
        fotoi++;
        if (fotoi > foto.length) {fotoi = 1} 
        foto[fotoi-1].style.display = "block"; 
        setTimeout(scorrimento, 4000); 
      }
    </script>
</body>
</html>

