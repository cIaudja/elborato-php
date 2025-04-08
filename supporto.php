<!DOCTYPE html>
<html>  
  <head>      
      <title>Supporto</title>
      <link href="supporto.css" rel="stylesheet" type="text/css">
  </head>
  <body>
      <div class="background">
        <div class="container">
          <div class="screen">
            <div class="screen-body">
              <div class="screen-body-item left">
                <div class="app-title">
                  <span>CONTATTACI</span>
                </div>
              </div>
              <div class="screen-body-item">
                <div class="app-form">
                  <div class="app-form-group">
                    <form action="inviosupporto.php">
                    <input type="text" id="nome utente" name="nomeutente" placeholder="nome utente" required>
                    <input type="text" id="email"  name="email" placeholder="email" required>
                  </div>
                  <div class="app-form-group message">
                    <textarea name="messaggio" placeholder="messaggio" required></textarea>
                  </div>
                  <div class="app-form-group buttons">
                    <input type="submit" value="Manda">
                    <input type="reset" value="Cancella">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>

